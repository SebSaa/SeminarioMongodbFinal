<?php

require_once "controller/Controller.php";


class cobroController extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function getCobro($params = []) {
        $numero = intval($params[':numero']);
        $cobro = $this->cobro_model->getCobro($numero);
        foreach ($cobro as $c) {
            var_dump($c);
        }
        print_r($cobro[0]);
    }

    public function getUsuarios() {
        $usuarios = $this->model->getUsuarios();
        print_r(json_encode($usuarios));
    }

    public function saveUsuario() {
        $datos = json_decode(file_get_contents("php://input"), true);
        $resultado = $this->model->saveUsuario($datos);
        echo $resultado;  
    }
}