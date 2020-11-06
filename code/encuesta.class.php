<?php

require_once('conexion_db.php');

class Encuesta {
    protected $DB;
    protected $cantidad;
    public function __construct()
    {
        $this->DB = new Conexion_DB();
        $this->cantidad = 10;
    }
    public function GenerarPreguntas(){
        $consultaBase  = $this->DB->QuerySQL("SELECT max(id) as maxi,min(id) as mini FROM preguntas");
        $rangos = $consultaBase->fetch_all()[0];
        $ValorIn = " ". rand($rangos[1],$rangos[0]);
        for($x= 1;$x<10;$x++){
            $ValorIn = $ValorIn . ", ". rand($rangos[1],$rangos[0]);
        }
        $consulta  = $this->DB->QuerySQL("SELECT * FROM preguntas where id in ($ValorIn)");
        return $consulta;
    }
    public function SavePreguntas(){
        try{
            $StringSQl = "INSERT INTO usuarios(nombre,apellido,sexo,edad,salario,provincia) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."',".$_POST['sexo'].",".$_POST['edad'].",".$_POST['salario'].",".$_POST['provincia'].");";
            if($this->DB->QuerySQL($StringSQl) === true){
                $id_usuario = $this->DB->insert_id;
                $arr = $_POST['P'];
                foreach($arr as $key => $valor){
                    $this->DB->QuerySQL("INSERT INTO respuestas(id_usuario,id_pregunta,id_respuesta) VALUES(".$id_usuario.",".$key.",".$valor.")");
                }
                echo "<script> alert('Se ha guardado el registro'); </script>";
                echo "<script> window.location.href='index.php'; </script>";
            }else {
                echo "<script> alert('Ha sucedido un error'); </script>";
            }
        }catch(Exception $e){
            echo $e;
        }

    }
}

