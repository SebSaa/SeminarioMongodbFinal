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
    return $this->coleccionUsuarios->find($param);
    
}

public function getUsuarios(){
    return $this->coleccionUsuarios->find()->toArray();
    
}

public function saveUsuario($datos){
    $resultado = $this->coleccionUsuarios->insertOne($datos);
    return $resultado->getInsertedId();
}

public function delUsuario($dni){
    return $this->coleccionUsuarios->deleteOne(['dni' => $dni]);
    
    // realizando pruebas, en mi pc no funciona por error en el IDE, 
    // desde otra pc funciona muy bien, x eso mi decido hacerlo por dni
    //$resultado = $this->coleccion->deleteOne( array( '_id' => new MongoDB\BSON\ObjectId($_id)));
    
}

public function udpUsuario($datos){
    $dni = ($datos['dni']);
    $nombre = ($datos['nombre']);
    $apellido = ($datos['apellido']);
    $resultado = $this->coleccionUsuarios->updateOne(['dni'=> $dni],['$set'=> $datos]);
    //$resultado = $this->coleccionUsuarios->updateOne(['nombre' => $nombre],['apellido' => $apellido],['$set' => ['dni' => $dni]]);
    // $resultado = $this->coleccionUsuarios->update(array("dni" => $datos['dni']),'$set'=> $datos));
    // return $resultado;
    return ($resultado->getModifiedCount());
    //return $resultado->getMatchedCount();
    
}
}