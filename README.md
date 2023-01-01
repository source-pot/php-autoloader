# php-autoloader
A simple PHP autoloader class that loads class files from a basic directory structure (roughly equivalent to PSR-4)

## Usage
Simply include the `Autoloader.php` file then use the `register` method passing in the root directory of all your classes.

```php
<?php

include 'Autoloader.php';
Autoloader::register('vendor');

// Attempts to load file located at 'vendor/Vendor/Namespace/Class.php'
$class = new Vendor\Namespace\Class;

```
