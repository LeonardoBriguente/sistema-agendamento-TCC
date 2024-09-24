<?php
require_once "./database.php";

class Colaborador
{
    private $pdo;
    private $id;

    public function __construct()
    {
        $database = new Database("localhost", "stimastudio", "root", "");
        $this->pdo = $database->Connect();
    }

    public function AddColaborador($nome, $logradouro, $numero_residencia, $data_nascimento, $bairro, $cidade, $cpf, $telefone, $email, $complemento)
{
    try {
        $sql = "INSERT INTO colaborador (nome, logradouro, numero_residencia, data_nascimento, bairro, cidade, cpf, telefone, email, complemento)
                VALUES (:nome, :logradouro, :numero_residencia, :data_nascimento, :bairro, :cidade, :cpf, :telefone, :email, :complemento)";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':logradouro', $logradouro);
        $stmt->bindParam(':numero_residencia', $numero_residencia);
        $stmt->bindParam(':data_nascimento', $data_nascimento);
        $stmt->bindParam(':bairro', $bairro);
        $stmt->bindParam(':cidade', $cidade);
        $stmt->bindParam(':cpf', $cpf);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':complemento', $complemento);

        $stmt->execute();
        
        return "Colaborador adicionado com sucesso!";
    } catch (PDOException $e) {

        return "Erro ao adicionar colaborador: " . $e->getMessage();
    }
}

}
