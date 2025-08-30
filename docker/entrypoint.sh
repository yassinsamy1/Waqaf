#!/bin/bash

# Wait for database to be ready
echo "Waiting for database..."
until php artisan migrate:status > /dev/null 2>&1; do
    echo "Database not ready, waiting..."
    sleep 2
done

# Run migrations
echo "Running migrations..."
php artisan migrate --force

# Clear and cache config
echo "Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set proper permissions
chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Start supervisor
echo "Starting services..."
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
