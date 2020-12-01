# SeminarioMongodbFinal
## Referencias 
La clase MongoDB php  
https://www.php.net/manual/es/class.mongodb.php  
Extras  
https://blog.clicko.es/guia-uso-de-mongodb-con-php/  

## Informe 
Realizando pruebas, en mi pc no funciona por error en el IDE en ObjectID, con lo cual manejamos el id como un objeto, desde otra pc funciona muy bien, por eso me decido hacerlo por dni, como indice, aunque no lo declare como tal.  
Esta es la forma que use para trabajar con el id. 
```
$resultado = $this->coleccion->deleteOne( array( '_id' => new MongoDB\BSON\ObjectId($_id)));
```

## Documentacion  

CRUD USUARIOS  
  
GET -> recibimos el listado completo de usuarios
```
http://localhost/seminarioMongo/usuarios 
```
GET -> recibimos el usuario con dni pasado como parametro en la url
```
http://localhost/seminarioMongo/usuarios/23993247  
```
POST -> almacemos en la base pasando un JSON, en caso de Usuario ya ingresado lo informa
```
http://localhost/seminarioMongo/usuarios
{
"nombre": "Seba",
"apellido": "Saav",
"dni": 23993247
}
```
PUT -> actualizamos la base pasando como JSON con los datos a modificar, en caso de no existir Usuario lo informa
```
http://localhost/seminarioMongo/usuarios
{
"nombre": "Sebastian",
"apellido": "Saavedra",
"dni": 23993247
}
```
DELETE -> borra el usuario con dni pasado en la url, en caso de existir, caso contrario lo informa
```
http://localhost/seminarioMongo/usuarios/24632250  
```
CRUD COBROS
GET -> recibimos el listado completo de cobros
```
http://localhost/seminarioMongo/cobros 
```
GET -> recibimos el cobro de un usuario particula con dni pasado como parametro en la url
```
http://localhost/seminarioMongo/cobros/23993247
```
POST -> almacemos en la base pasando un JSON, dni y pago, automatizando el pago del mes correspondiente
```
http://localhost/seminarioMongo/cobros
{
"dni": 23993247,
"importe": 900
}
```
Mensaje recibido al automatizar los pagos
```
su ultimo pago fue el mes 6 cargamos su nuevo pago del mes 7 id -> 5fc63b02a6470000370040e6
```
ESTRUCTURA DEL ROUTE
//Usuarios
$r->addRoute('usuarios','GET','usuarioController','getUsuarios');
$r->addRoute('usuarios/:dni','GET','usuarioController','getUsuario');
$r->addRoute('usuarios','POST','usuarioController','saveUsuario');
$r->addRoute('usuarios','PUT','usuarioController','updUsuario');
$r->addRoute('usuarios/:dni','DELETE','usuarioController','delUsuario');

//Cobranza
$r->addRoute('cobros','GET','cobroController','getCobros');
$r->addRoute('cobros/:dni','GET','cobroController','getCobro');
$r->addRoute('cobros','POST','cobroController','saveCobro');  
