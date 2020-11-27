<?php
require_once "Router.php";
require_once "controller/usuarioController.php";

$r = new Router();
//Usuarios
$r->addRoute('usuarios','GET','usuarioController','getUsuarios');
$r->addRoute('usuarios/:dni','GET','usuarioController','getUsuario');
$r->addRoute('usuarios','POST','usuarioController','saveUsuario');
$r->addRoute('usuarios/:dni','PUT','usuarioController','updUsuario');
$r->addRoute('usuarios/:dni','DELETE','usuarioController','delUsuario');

//Cobranza
$r->addRoute('cobros','GET','cobroController','getCobros');
$r->addRoute('cobros/:numero','GET','cobroController','getCobro');
$r->addRoute('cobros','POST','cobroController','saveCobro');

//run
$r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);