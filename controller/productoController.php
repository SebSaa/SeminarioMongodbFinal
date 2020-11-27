<?php
require_once "controller/Controller.php";
// require_once "model/productoModel.php";
// require_once "model/Model.php";

class productoController extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function getProducto($params = []) {
        $criterio = $params[':criterio'];

        $producto = $this->model->getProducto($criterio);
        //print_r(json_encode($producto));
        
        foreach ($producto as $pro) {
            var_dump($pro);
        }
    }

    public function getProductos() {
        //echo("producto controller");
        $productos = $this->model->getProductos();
        print_r(json_encode($productos));
    }

    public function saveProducto() {
        $datos = json_decode(file_get_contents("php://input"), true);
        $resultado = $this->model->saveProducto($datos);
        echo $resultado;  
    }
    
    public function delProducto($params = []){
        $id = $params[':id'];
        $resultado = $this->model->delProducto($id);
    }

    public function updProducto($params = []){
        $id = $params[':id'];
        echo $id;
    }
}