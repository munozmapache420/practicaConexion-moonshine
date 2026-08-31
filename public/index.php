<?php

require_once __DIR__ . '/../app/models/modelPersona.php';

$persona = new Persona();

$personas = $persona->listar();

print_r($personas);