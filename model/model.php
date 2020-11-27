<?php
require 'vendor/autoload.php'; // incluir lo bueno de Composer

class Model {

    protected $cliente;
    protected $coleccion;

    public function __construct(){
        $this->cliente = new MongoDB\Client("mongodb://localhost:27017");
        $this->coleccion = $this->cliente->dbClientes->usuarios;
    }
    
  
    }

?>



