<?php
require_once "model/model.php";

class cobroModel extends Model {
    
    public function __construct(){
        parent::__construct();
    }
     
    public function getCobro($numero){
        $param = array('dni' =>  $numero);
        return $this->coleccionCobros->find($param);
        
    }
    
    public function getCobros(){
        return $this->coleccionCobros->find()->toArray();
        
    }
    
    public function saveCobro($datos){
        $resultado = $this->coleccionCobros->insertOne($datos);
        return $resultado->getInsertedId();
    }





}
