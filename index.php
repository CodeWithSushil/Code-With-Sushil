<?php 
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

require_once __DIR__."/vendor/autoload.php";
require_once __DIR__."/config/database.php";

$loader = new FilesystemLoader(__DIR__.'/resources/views');

$twig = new Environment($loader,[
  'cache'=>__DIR__.'/public/cache',
  'debug'=>true
]);

echo $twig->render('index.twig',[
  'title'=>'Code With Sushil',
  'name'=>'Sushil Kumar (Web Developer)'
]);
