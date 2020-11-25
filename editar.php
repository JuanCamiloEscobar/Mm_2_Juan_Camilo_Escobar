<?php

include("BD.php");

if(isset($_POST["editar"])){

  //recibir los datos 
  $nombre = $_POST["Nombre"];
  $precio = $_POST["Precio"];
  $descripcion = $_POST["descripcion"];

   //recibir el id 
  $id= $_GET["id"];

  //crear copia(objeto) de la class BD
  $transaccion=new BD();

  //creamos la consulta SQL
  $consultaSQL="UPDATE productos SET nombre='$nombre',precio='$precio',descripcion='$descripcion' WHERE idProducto='$id'";

  //utilizar la function agregar datos
  $transaccion->editarDatos($consultaSQL);
  
  //para redireccionar
  header("location:helmet.php");

}

?>