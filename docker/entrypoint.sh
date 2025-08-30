#!/bin/bash

# Set environment variables for production
export APP_ENV=production
export APP_DEBUG=false

# Wait for database to be ready with timeout
echo "Waiting for database connection..."
timeout=60
counter=0

until php artisan tinker --execute="DB::connection()->getPdo();" > /dev/null 2>&1; do
    echo "Database not ready, waiting... ($counter/$timeout)"
    sleep 3
    counter=$((counter + 3))
    if [ $counter -ge $timeout ]; then
        echo "Database connection timeout. Continuing anyway..."
        break
    fi
done

# Run migrations if database is available
echo "Running migrations..."
php artisan migrate --force || echo "Migration failed, continuing..."

# Clear and cache config (skip if fails)
echo "Optimizing Laravel..."
php artisan config:clear || echo "Config clear failed"
php artisan config:cache || echo "Config cache failed"
php artisan route:clear || echo "Route clear failed"
php artisan view:clear || echo "View clear failed"

# Set proper permissions
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Start supervisor
echo "Starting services..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
