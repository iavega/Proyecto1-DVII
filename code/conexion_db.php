<?php

class Conexion_DB {
    protected $conexion;
    public $insert_id;
    public function __construct()
    {   
        $this->conexion =  new mysqli('127.0.0.1','root','','proyecto');
        if ($this->conexion->connect_error) {
            die('Error de Conexión (' . $this->conexion->connect_errno . ') '
                    . $this->conexion->connect_error);
        }
    }
    public function QuerySQL($String){
        $res = $this->conexion->query($String);
        $this->insert_id = $this->conexion->insert_id;
        return $res;
    }
    public function close(){
        $this->conexion->close();
    }
}