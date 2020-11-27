<?php
require_once "Router.php";
require_once "controller/productoController.php";

$r = new Router();
$r->addRoute('lista','GET','productoController','getProductos');
$r->addRoute('listaOne/:criterio','GET','productoController','getProducto');
$r->addRoute('nuevo','POST','productoController','saveProducto');
$r->addRoute('actualizar/:id','PUT','productoController','updProducto');
$r->addRoute('eliminar/:id','DELETE','productoController','delProducto');

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);