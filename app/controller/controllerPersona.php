<?php

require_once __DIR__ . '/../models/modelPersona.php';

class personaController
{
    public function index()
    {
        $modelo = new ModelPersona();

        $personas = $modelo->listar();

        require_once __DIR__ . '/../views/viewPersona.php';
    }
}