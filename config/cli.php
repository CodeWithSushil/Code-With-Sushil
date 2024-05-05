<?php
$name = "cws";
die();
ConsoleRunner::run(
  new SingleManagerProvider($entityManager)
);
