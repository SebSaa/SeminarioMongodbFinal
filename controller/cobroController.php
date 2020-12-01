<?php

require_once "controller/Controller.php";


class cobroController extends Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function getCobro($params = []) {
        $dni = intval($params[':dni']);
        $cobro = $this->cobro_model->getCobro($dni);
        foreach ($cobro as $c) {
            var_dump($c);
        }
    }

    public function getCobros() {
        $cobros = $this->cobro_model->getCobros();
        print_r(json_encode($cobros));
    }

    public function saveCobro() {
        $cont = 0; 
        $ultimoMesPago = 0;
        $datos = json_decode(file_get_contents("php://input"), true);
        $dni = ($datos['dni']);
        $cobro = $this->cobro_model->getCobro($dni);
        foreach ($cobro as $c) {
            //var_dump($c['mes']);
            $ultimoMesPago = $c['mes'];
            $cont++;
        }
        if ($cont>0){
            $nuevoMesPago = $datos['mes']= $ultimoMesPago + 1;
            echo "su ultimo pago fue el mes " . $ultimoMesPago . " cargamos su nuevo pago del mes " .
            $nuevoMesPago . " id -> ";
            $resultado = $this->cobro_model->saveCobro($datos);
            echo $resultado;
        }else{
            echo "el usuario no existe";
        }
          
    }
}