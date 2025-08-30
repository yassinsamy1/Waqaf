#!/bin/bash

echo "Starting Vercel deployment preparation..."

# Install PHP dependencies
echo "Installing PHP dependencies..."
composer install --no-dev --optimize-autoloader

# Install Node dependencies and build assets
echo "Installing Node dependencies..."
npm install

echo "Building assets..."
npm run build

# Clear and cache configurations
echo "Optimizing Laravel..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Deployment preparation complete!"
