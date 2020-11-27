<?php
include_once "conexion.php";

$resultado = $colección->insertOne( [ 'producto' => 'mermelada', 'precio' => '90' ] );


public function addProduct($product){
    $response = $this->mongo->products->insertOne($product);
    return $response->getInsertedId();
}


echo "Inserted with Object ID '{$resultado->getInsertedId()}'";

