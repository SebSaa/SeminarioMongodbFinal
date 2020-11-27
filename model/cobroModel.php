<?php
require_once "model/model.php";

class cobroModel extends Model {

    public function __construct()
    {
        parent::__construct();
    }
     
    public function getCobro($numero){
        $param = array('comprobante' =>  $numero);
        return $this->coleccion->find($param);
        
    }
    
    public function getCobros(){
        return $this->coleccion->find()->toArray();
        
    }
    
    public function saveCobros($datos){
        $resultado = $this->coleccion->insertOne($datos);
        return $resultado->getInsertedId();
    }





}
