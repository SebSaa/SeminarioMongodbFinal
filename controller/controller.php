<?php
    require_once "model/productoModel.php";

    class Controller {
        protected $model;
        
        public function __construct() {
            
            $this->model = new productoModel();
        }

        
    }

?>