<?php

class ColaboradorVO{
    //Class value object para um colaborado
    //Here estarão all atributos do colab
    //atributos publico e passa a classe por parametro para as funções/
    //Class de transporte de dado que = do controller
    public $nome;
    public $logradouro;
    public $numero_residencia;
    public $data_nascimento;
    public $bairro;
    public $cidade;
    public $cpf;
    public $telefone;
    public $email;
    public $complemento;

    public function __construct($nome, $logradouro, $numero_residencia, $data_nascimento, $bairro, $cidade, $cpf, $telefone, $email, $complemento) {
        $this->nome = $nome;
        $this->logradouro = $logradouro;
        $this->numero_residencia = $numero_residencia;
        $this->data_nascimento = $data_nascimento;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->complemento = $complemento;
    }
}