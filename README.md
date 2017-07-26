# Simple Laravel Project

A very tiny and simple laravel project to display list of products and a single product.

Clone from the repository, run the migration and make seed data using php artisan tinker 
and factory(App\Product::class, 40)->create(). This will create 40 fake product in database.

Login to the system and visit "Browse products" url to display list of products. Click on view to see single product.
