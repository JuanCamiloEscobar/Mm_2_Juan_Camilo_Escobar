<?php

 class BD{

    //Variables o atributos
    public $usuarioBD="root";
    public $passwordBD="";    

    //Constructor
    public function __construct(){}

    //funciones o metodos// terminan en er,ir,or, acciones.
public function conectarBD(){


        try {
                    //poner nuestro gestor de BD y posicion y nombre de BD
                    $datosBD = "mysql:host=localhost;dbname=bdagv";

                    //acceder a los datos base de la BD (DSN)
                    //falta el usuario y los password, el $this es para que busque en esta class
                    $conexionBD=new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
                    return($conexionBD);
                      
                } catch (PDOException $error) {
                
                     echo($error->getMessage());
        

                 }
}



public function agregarDatos($consultaSQL){

    //1.conectarse a la BD
    $conexionBD=$this->conectarBD();

    //preparar la consulta que se va a realizar
    $consultaInsertarDatos= $conexionBD->prepare($consultaSQL);

    //ejecute la consulta
    $resultado=$consultaInsertarDatos->execute();
}


public function consultarDatos($consultaSQL){

    //conectarme BD
    $conexionBD=$this->conectarBD();

    //preparar la consulta que se va a realizar
    $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);

    //definir la forma en la que vamos a traer los datos //setFetchMode
    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //ejecutar
    $consultaBuscarDatos->execute();

    //retorne los datos
    return($consultaBuscarDatos->fetchAll());




}

public function eliminarDatos($consultaSQL){

    //1.conectarse a la BD
    $conexionBD=$this->conectarBD();

    //preparar la consulta que se va a realizar
    $consultaEliminarDatos= $conexionBD->prepare($consultaSQL);

    //ejecute la consulta
    $resultado=$consultaEliminarDatos->execute();

    //validar la operacion
    if ($resultado) {
        echo("Se elimino el registro");
    } else {
        echo("No se elimino");
    }
    
}

}
?>