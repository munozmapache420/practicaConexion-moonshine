<?php
require_once __DIR__ . "/../models/personaModel.php";
require_once __DIR__ . "/../views/personas/index.php";

class personaController{
    public function index(){
        $personaModel = new personaModel();
        $personaModel->listar();

    }
};

?>