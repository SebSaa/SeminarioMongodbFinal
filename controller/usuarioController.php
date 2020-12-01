<?php
require_once "controller/Controller.php";


class usuarioController extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function getUsuario($params = []) {
        $dni = intval($params[':dni']);
        $usuario = $this->usuario_model->getUsuario($dni);
        foreach ($usuario as $usu) {
            var_dump($usu);
        }
    }

    public function getUsuarios() {
        $usuarios = $this->usuario_model->getUsuarios();
        print_r(json_encode($usuarios));
    }

    public function saveUsuario() {
        $datos = json_decode(file_get_contents("php://input"), true);
        $dni = ($datos['dni']);
        $usuario = $this->usuario_model->getUsuario($dni);
        //print_r(json_encode($usuario));
        foreach ($usuario as $usu) {
            if ($usu["dni"] == $dni){
                echo "el usuario ya existe";
                die();
            };
        }
        echo "Grabando...  ";
        $resultado = $this->usuario_model->saveUsuario($datos);
        echo $resultado;  
    }
    
    public function delUsuario($params = []){
        $dni = intval($params[':dni']);
        $usuario = $this->usuario_model->getUsuario($dni);
        foreach ($usuario as $usu) {
            if ($usu["dni"] == $dni){
                echo "el usuario existe";
                $resultado = $this->usuario_model->delUsuario($dni);
                var_dump($resultado);
                die();
            };
        }
        echo "el usuario no existe...  ";
    }

    public function updUsuario(){
        $datos = json_decode(file_get_contents("php://input"), true);
        $dni = ($datos['dni']);
        $usuario = $this->usuario_model->getUsuario($dni);
        //print_r(json_encode($usuario));
        foreach ($usuario as $usu) {
            if ($usu["dni"] == $dni){
                echo "Registro Actualizado ->  ";
                $resultado = $this->usuario_model->udpUsuario($datos);
                echo $resultado; 
                die();
            };
        }
        
        echo "el usuario no existe";
    }
}