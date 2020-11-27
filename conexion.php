<?php
require 'vendor/autoload.php'; // incluir lo bueno de Composer

$cliente = new MongoDB\Client("mongodb://localhost:27017");
$colección = $cliente->demo->comercio;

// $resultado = $colección->insertOne( [ 'producto' => 'arroz', 'precio' => '65' ] );

// echo "Inserted with Object ID '{$resultado->getInsertedId()}'";









?>