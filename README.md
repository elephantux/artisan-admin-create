# artisan-admin-create
A package which provides a simple user creation with artisan command.

## Installation
Run the following command
```bash
composer require elephantux/admin-create
```

Then add service provider to config/app.php :
```php
Elephantux\AdminCreate\AdminCreateServiceProvider::class,
```
## Usage
In console:
```bash
php artisan admin:create admin@email.com password
```
...
