<?php
require_once "DAO/ColaboradorDAO.php";

class Colaborador {
    private $dao;


    public function __construct() {
        $this->dao = new ColaboradorDAO();
    }

    public function AddColaborador(ColaboradorVO $colaboradorVO) {
        
        
        // try{
            $result = $this->dao->InserirColaborador($colaboradorVO); //Deixar funcionando
        // }
        // catch(Exception $erro){
            // error_log($erro->getMessage());
        // }
        return $result;
    }
}

