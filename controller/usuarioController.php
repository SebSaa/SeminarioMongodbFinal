<?php
require_once "controller/Controller.php";


class usuarioController extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuario($params = []) {
        $dni = intval($params[':dni']);
        $usuario = $this->model->getUsuario($dni);
        // foreach ($usuario as $usu) {
        //     var_dump($usu);
        // }
        var_dump($usuario);
        //print_r($usuario.['collection' => 'usuarios']);
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
    
    public function delUsuario($params = []){
        $dni = intval($params[':dni']);
        $resultado = $this->model->delUsuario($dni);
        var_dump($resultado);
        
    }

    public function updUsuario($params = []){
        $id = $params[':id'];
        echo $id;
    }
}