<?php
require_once "./database.php";

class Colaborador
{
    private $pdo;

    public function __construct()
    {
        $database = new Database("localhost", "stimastudio", "root", "");
        $this->pdo = $database->Connect();
    }

    public function AddColaborador($nome, $logradouro, $data_nascimento, $bairro, $cidade, $cpf, $telefone, $email, $complemento)
    {
        $sql = "INSERT INTO colaborador (nome, logradouro, data_nascimento, bairro, cidade, cpf, telefone, email, complemento)
                VALUES (:nome, :logradouro, :data_nascimento, :bairro, :cidade, :cpf, :telefone, :email, :complemento)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':logradouro', $logradouro);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':complemento', $complemento);

        $stmt->execute();
    }
}
