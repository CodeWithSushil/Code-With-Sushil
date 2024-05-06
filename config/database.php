<?php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$env = dirname(__DIR__);

$dotenv = Dotenv\Dotenv::createImmutable($env);
$dotenv->load();

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/app"),
    isDevMode: true,
);

$connectionParams = [
    //'dbname' => 'mydb',
    //'user' => 'user',
   // 'password' => 'secret',
  //  'host' => 'localhost',
   // 'driver' => 'pdo_mysql',
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/database/database.sqlite',
];

$connection = DriverManager::getConnection($connectionParams);

$entityManager = new EntityManager($connection, $config);
