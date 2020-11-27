<?php
require 'vendor/autoload.php'; // include Composer goodies

//$cliente = new MongoDB\DriverMongoDB\Client("mongodb://localhost:27017");\Client("mongodb://localhost:27017");
$cliente = new MongoDB\Client("mongodb://localhost:27017");
$colección = $cliente->demo->comercio;

//$resultado = $colección->find( [ 'producto' => 'arroz' ] );
$resultado = $colección->find( [ 'producto' => 'arroz' ] );
$resultado = $colección->find()->toArray();

print_r(json_encode($resultado));

// foreach ($resultado as $entry) {
//     echo $entry['_id'], ': ', $entry['producto'], "\n";
// }
?>