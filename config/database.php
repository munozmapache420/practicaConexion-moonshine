<?php

class Database
{
    private $conexion;

    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . '/../.env');

        $host = $env['DB_HOST'];
        $dbname = $env['DB_NAME'];
        $username = $env['DB_USER'];
        $password = $env['DB_PASSWORD'];

        try {

            $this->conexion = new PDO(
                "mysql:host=$host;dbname=$dbname",
                $username,
                $password
            );

            $this->conexion->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

        } catch (PDOException $e) {

            echo "Error de conexión: " . $e->getMessage();

        }
    }

    public function conectar()
    {
        return $this->conexion;
    }
}