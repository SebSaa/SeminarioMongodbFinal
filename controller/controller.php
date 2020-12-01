<?php
    require_once "model/usuarioModel.php";
    require_once "model/cobroModel.php";

    class Controller {
        protected $model;
        
        public function __construct() {
            
            $this->usuario_model = new usuarioModel();
            $this->cobro_model = new cobroModel();
        }

        
    }

?>