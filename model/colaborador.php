<?php
require_once "DAO/ColaboradorDAO.php";

class Colaborador {
    private $dao;


    public function __construct() {
        $this->dao = new ColaboradorDAO();
    }

    public function AddColaborador($nome, $logradouro, $numero_residencia, $data_nascimento, $bairro, $cidade, $cpf, $telefone, $email, $complemento) {
        try{
            $this->dao->InserirColaborador($nome, $logradouro, $numero_residencia, $data_nascimento, $bairro, $cidade, $cpf, $telefone, $email, $complemento); //Deixar funcionando

            return "Colaborador cadastrado com sucesso!";
        }
        catch(Exception $erro){
            error_log($erro->getMessage());
            echo "Erro ao cadastrar colaborador,  tente novamente mais tarde";
        }
    }
}

