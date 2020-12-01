<?php
require 'vendor/autoload.php'; // incluir lo bueno de Composer

class Model {

    protected $cliente;
    protected $coleccionUsuarios;
    protected $colecconCobros;

    public function __construct(){
        $this->cliente = new MongoDB\Client("mongodb://localhost:27017");
        $this->coleccionUsuarios = $this->cliente->dbClientes->usuarios;
        $this->coleccionCobros = $this->cliente->dbClientes->cobros;
    }
}

?>



