<?php
require_once "./model/colaborador.php";

class ColabController{
    private $colaboradorModel;

    public function __construct() {
        $this->colaboradorModel = new Colaborador();
    }
}