<?php

declare(strict_types=1);

use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/seeds',
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => $_ENV['ENVIRONMENT'],
        'production' => [
            'adapter' => 'mysql',
            'host' => $_ENV['DB_HOST'],
            'name' => $_ENV['MYSQL_DATABASE'],
            'user' => $_ENV['MYSQL_USER'],
            'pass' => $_ENV['MYSQL_PASSWORD'],
            'port' => $_ENV['DB_PORT'],
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => $_ENV['DB_HOST'],
            'name' => $_ENV['MYSQL_DATABASE'],
            'user' => $_ENV['MYSQL_USER'],
            'pass' => $_ENV['MYSQL_PASSWORD'],
            'port' => $_ENV['DB_PORT'],
            'charset' => 'utf8',
        ],
    ],
    'version_order' => 'creation',
];
