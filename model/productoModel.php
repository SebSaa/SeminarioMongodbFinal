<?php
require_once "model/Model.php";
require_once "controller/productoController.php";


 class productoModel extends Model{

public function __construct()
{
    parent::__construct();
}
 
public function getProducto($criterio){
    $param = array('nombre' => $criterio);
       return $this->coleccion->find($param);
}

public function getProductos(){
    //echo("producto model");
    return $this->coleccion->find()->toArray();
    
}

public function saveProducto($datos){
    $resultado = $this->coleccion->insertOne($datos);
    return $resultado->getInsertedId();
}

public function delProducto($id){
    $mongoId = '5a2493c33c95a1281836eb6a';

    $coleccion->find(['_id'=> new MongoDB\BSON\ObjectId("$mongoId")]);

    $_id = new ObjectId($id);
    //$resultado = $this->coleccion->deleteOne( array( '_id' => new MongoDB\BSON\ObjectId ($_id )) );
    return $this->coleccion->deleteOne(['_id'=> $_id]);
    //$resultado = $this->coleccion->deleteOne(array('nombre' => "Nazareno"), array("justOne" => true));
    //$this->coleccion->remove(array('type' => 94), array("justOne" => true));
    
    // $datos = array(
    //     "id" => $id,
    // );
    // echo ($datos['id']);
    // $resultado = $this->coleccion->deleteOne($datos);
    //var_dump($resultado);
}

public function updProducto($id){

}
 }