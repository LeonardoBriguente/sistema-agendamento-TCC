<?php
require_once "./database.php";

class Colaborador {
    private $pdo;

    public function __construct() {
        $database = new Database("localhost", "stimastudio", "root", "");
        $this->pdo = $database->Connect();
    }

    public function AddColaborador($nome, $logradouro, $numero_residencia, $data_nascimento, $bairro, $cidade, $cpf, $telefone, $email, $complemento) {
        try {
            // Gera um token único para a criação de senha
            $token = bin2hex(random_bytes(16)); // Token aleatório
            $token_expiracao = (new DateTime())->modify('+20 minutes')->format('Y-m-d H:i:s'); // Expira em 20 minutos

            // Prepara a consulta SQL
            $sql = "INSERT INTO colaborador (nome, logradouro, numero_residencia, data_nascimento, bairro, cidade, cpf, telefone, email, complemento, token_senha, token_expiracao)
                    VALUES (:nome, :logradouro, :numero_residencia, :data_nascimento, :bairro, :cidade, :cpf, :telefone, :email, :complemento, :token_senha, :token_expiracao)";

            $stmt = $this->pdo->prepare($sql);

            // Faz o bind dos parâmetros
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
            $stmt->bindParam(':token_senha', $token);
            $stmt->bindParam(':token_expiracao', $token_expiracao);

            // Executa a consulta
            $stmt->execute();

            // Envia o e-mail para o colaborador com o link para criar a senha
            $this->sendPasswordCreationEmail($email, $token);

            return "Colaborador adicionado com sucesso! E-mail enviado para criação de senha.";
        } catch (PDOException $e) {
            return "Erro ao adicionar colaborador: " . $e->getMessage();
        }
    }

    private function sendPasswordCreationEmail($email, $token) {
        $link = "https://seusite.com/definir_senha.php?token=" . $token;

        $subject = "Criação de Senha de Acesso";
        $message = "Olá, por favor, crie sua senha através do link abaixo:\n\n" . $link;
        $headers = "From: noreply@seusite.com";

        // Função mail nativa do PHP para envio de e-mail
        mail($email, $subject, $message, $headers);
    }
}

