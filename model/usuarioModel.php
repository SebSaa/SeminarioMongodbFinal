<?php
require_once "model/Model.php";
require_once "controller/usuarioController.php";


 class usuarioModel extends Model{

public function __construct(){
    parent::__construct();
    
}

//$manager = new MongoDB\Driver\Manager();
 
public function getUsuario($dni){
    $param = array('dni' =>  $dni);
    return $this->coleccion->find($param);
    
}

public function getUsuarios(){
    return $this->coleccion->find()->toArray();
    
}

public function saveUsuario($datos){
    $resultado = $this->coleccion->insertOne($datos);
    return $resultado->getInsertedId();
}

public function delUsuario($dni){
    return $this->coleccion->deleteOne(['dni' => $dni]);
    
    // $_id = new ObjectId($id);
    // $resultado = $this->coleccion->deleteOne( array( '_id' => new MongoDB\BSON\ObjectId($_id)));
}

public function updUsuario($id){

}
}