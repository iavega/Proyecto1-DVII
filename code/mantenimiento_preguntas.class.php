<?php 
require_once("./conexion_db.php");

class Preguntas {
    private $DB;
    public function __construct()
    {
        $this->DB =  new Conexion_DB();
    }
    public function showAll(){
        try{
            $consulta  = $this->DB->QuerySQL("SELECT * FROM preguntas");
            return $consulta;
        }catch(Exception $e){
            echo $e;
        }
    }
    public function find($id){
        try{
            $consulta  = $this->DB->QuerySQL("SELECT * FROM preguntas WHERE id = $id");
            return $consulta;
        }catch(Exception $e){
            echo $e;
        }
    }
    public function CreateOrUpdate($id,$string){
        if($id != 0){
            $this->Update($id,$string);
        }else{
            $this->Create($string);
        }

    }
    public function Create($string){
        try{
            if($this->DB->QuerySQL("INSERT INTO preguntas(titulo) VALUES ('$string');") === true){
                echo "<script> alert('Se ha guardado el registro'); </script>";
            }else {
                echo "<script> alert('Ha sucedido un error'); </script>";
            }
        }catch(Exception $e){
            echo $e;
        }
        

    }
    public function Update($id,$string){
        try{
            if($this->DB->QuerySQL("UPDATE  preguntas SET titulo = '$string' WHERE id = $id;") === true){
                echo "<script> alert('Se ha Actualizado el registro'); </script>";
            }else {
                echo "<script> alert('Ha sucedido un error'); </script>";
            }
        }catch(Exception $e){
            echo $e;
        }
    }
    public function delete($id){
        try{
            $consulta  = $this->DB->QuerySQL("DELETE FROM preguntas WHERE id = $id");
            echo "<script> alert('Se ha borrado el registro'); </script>";
        }catch(Exception $e){
            echo $e;
        }
    }
}