# SeminarioMongodbFinal
Referencias 
La clase MongoDB
https://www.php.net/manual/es/class.mongodb.php



CRUD PRODUCTO  
//Productos
$r->addRoute('getAll','GET','productoController','getProductos');  
$r->addRoute('get/:criterio','GET','productoController','getProducto');  
$r->addRoute('new','POST','productoController','saveProducto');  
$r->addRoute('update/:id','PUT','productoController','updProducto');  
$r->addRoute('delete/:id','DELETE','productoController','delProducto');  

CRUD COBROS  
//Cobranza  
$r->addRoute('getAll','GET','cobroController','getCobros');  
$r->addRoute('get/:criterio','GET','cobroController','getCobro');  
$r->addRoute('new','POST','cobroController','saveCobro');  
