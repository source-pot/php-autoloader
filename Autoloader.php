<?php

class Autoloader
{
    private static string $searchPath = '';

    public static function register(string $searchPath = ''): void
    {
        self::$searchPath = rtrim($searchPath, '/') . '/';
        spl_autoload_register([self::class, 'autoload']);
    }

    public static function autoload(string $className): void
    {
        $filename =
            self::$searchPath
            .str_replace('\\', '/', $className)
            .'.php';

        if (file_exists($filename)) {
            include $filename;
        }
    }
}
