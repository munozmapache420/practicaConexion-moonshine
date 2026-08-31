<?php

require_once __DIR__ . '/../../config/database.php';

class ModelPersona
{
    private $conexion;

    public function __construct()
    {
        $database = new database();
        $this->conexion = $database->connect();
    }

public function listar()
{
    $sql = "SELECT * FROM personas";
    $consulta = $this->conexion->query($sql);
    $consulta->execute(); 
    
    return $consulta->fetchAll();
}
}

?>