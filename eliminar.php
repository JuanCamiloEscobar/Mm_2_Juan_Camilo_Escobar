<?php

//incluir el archivo
include("BD.php");

 //recibir el id 
 $id= $_GET["id"];

 //crear objeto (sacar copia)
 $transaccion= new BD();

 //creamos la consulta
 $consultaSQL="DELETE FROM productos WHERE idProducto='$id'";

 //ejecutar el metodo
 $transaccion->eliminarDatos($consultaSQL);

 header("location:helmet.php");


?>