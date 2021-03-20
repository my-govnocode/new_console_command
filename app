<?php

include __DIR__ . DIRECTORY_SEPARATOR .'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new \Symfony\Component\Console\Application('demo application');
$app->add(new \App\SayHello());
$app->add(new \App\MultipleLineOutput());
$app->add(new \App\AppQuest());

$app->run();