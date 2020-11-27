# SeminarioMongodbFinal
Referencias 
La clase MongoDB
https://www.php.net/manual/es/class.mongodb.php


CRUD USUARIOS
//Usuarios
$r->addRoute('usuarios','GET','usuarioController','getUsuarios');
$r->addRoute('usuarios/:dni','GET','usuarioController','getUsuario');
$r->addRoute('usuarios','POST','usuarioController','saveUsuario');
$r->addRoute('usuarios/:dni','PUT','usuarioController','updUsuario');
$r->addRoute('usuarios/:dni','DELETE','usuarioController','delUsuario');

CRUD COBRANZA
//Cobranza
$r->addRoute('cobros','GET','cobroController','getCobros');
$r->addRoute('cobros/:numero','GET','cobroController','getCobro');
$r->addRoute('cobros','POST','cobroController','saveCobro');
