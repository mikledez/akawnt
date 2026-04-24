#!/bin/bash

# Wait for MySQL to be ready (MySQL takes ~10-15 seconds to initialize)
echo "Waiting for MySQL to initialize..."
sleep 15
echo "MySQL should be ready now."

# Run Laravel migrations
php artisan migrate --force

# Start Apache in foreground
exec apache2-foreground