<?php
require_once __DIR__ . "/../../config/database.php";

class Persona
{
    public $id;
    public $nombre;
    public $edad;
    public $correo;
    public $conexion;

    public function __construct()
    {
        $database = new Database();
        $this->conexion = $database->conectar();
    }

    public function listar()
    {
        $sql = "SELECT * FROM personas";
        $consulta = $this->conexion->query($sql);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    
}
?>