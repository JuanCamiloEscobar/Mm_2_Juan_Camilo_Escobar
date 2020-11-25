<?php 

include("BD.php");

if(isset($_POST["btnRegistrar"])){

  //recibir los datos 
  $nombreProducto = $_POST["Nombre"];
  $marcaProducto = $_POST["Marca"];
  $precioProducto = $_POST["Valor"];
  $Descripcion = $_POST["Descripcion"];
  $foto = $_POST["foto"];

  //crear copia(objeto) de la class BD
  $transaccion=new BD();

  //creamos la consulta SQL
  $consultaSQL="INSERT INTO productos(nombre,marca,precio,descripcion,foto) VALUES ('$nombreProducto','$marcaProducto','$precioProducto','$Descripcion','$foto')";

  //utilizar la function agregar datos
  $transaccion->agregarDatos($consultaSQL);

}



?>