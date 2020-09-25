<?php
include __DIR__ . "/vendor/autoload.php";

$dados = [
    'inicio' => new \DateTime('now'),
    'termino' => new \DateTime('tomorrow')
];

var_dump($dados);

dump($dados);