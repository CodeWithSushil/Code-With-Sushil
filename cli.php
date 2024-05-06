#!/usr/bin/env php
<?php 
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

require_once "vendor/autoload.php";
require_once "config/database.php";

ConsoleRunner::run(
  new SingleManagerProvider($entityManager)
);
