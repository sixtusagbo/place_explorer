# Place Explorer

Simple application you can use to find your address on the world map🗺️.

I made this project with [Laravel](https://laravel.com/) + [TypeScript](https://www.typescriptlang.org/) + [Google Maps](https://developers.google.com/maps).

# Installation

Don't forge to copy `.env.example` to `.env` and set your Google Maps API key.

```bash
# Install dependencies
composer install
npm install
# Generate application key
php artisan key:generate
# Migrate database
php artisan migrate
# Build assets
npm run prod
# Run the application
php artisan serve
```
