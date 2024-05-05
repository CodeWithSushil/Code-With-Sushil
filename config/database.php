<?php

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src"),
    isDevMode: true,
);

$connectionParams = [
    'dbname' => 'mydb',
    'user' => 'user',
    'password' => 'secret',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
];

$connection = DriverManager::getConnection($connectionParams);

$entityManager = new EntityManager($connection, $config);
