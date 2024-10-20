<?php
//DAO lida com as requisições do banco.
require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/../ColaboradorVO.php';


class ColaboradorDAO {
    private $pdo;

    public function __construct() {
        $database = new Database("localhost", "stimastudio", "root", "");
        $this->pdo = $database->Connect();
    }

    public function InserirColaborador(ColaboradorVO $colaboradorVO) {
        $result = true;
        try {
            // Gera um token único para a criação de senha
            // $token = bin2hex(random_bytes(16)); // Token aleatório
            // $token_expiracao = (new DateTime())->modify('+20 minutes')->format('Y-m-d H:i:s'); // Expira em 20 minutos

            // Prepara a consulta SQL
            $sql = "INSERT INTO colaborador (nome, logradouro, numero_residencia, data_nascimento, bairro, cidade, cpf, telefone, email, complemento)
                    VALUES (:nome, :logradouro, :numero_residencia, :data_nascimento, :bairro, :cidade, :cpf, :telefone, :email, :complemento)";

            $stmt = $this->pdo->prepare($sql);

            // Faz o bind dos parâmetros
            $stmt->bindParam(':nome', $colaboradorVO->nome);
            $stmt->bindParam(':logradouro', $colaboradorVO->logradouro);
            $stmt->bindParam(':numero_residencia', $colaboradorVO->numero_residencia);
            $stmt->bindParam(':data_nascimento', $colaboradorVO->data_nascimento);
            $stmt->bindParam(':bairro', $colaboradorVO->bairro);
            $stmt->bindParam(':cidade', $colaboradorVO->cidade);
            $stmt->bindParam(':cpf', $colaboradorVO->cpf);
            $stmt->bindParam(':telefone', $colaboradorVO->telefone);
            $stmt->bindParam(':email', $colaboradorVO->email);
            $stmt->bindParam(':complemento', $colaboradorVO->complemento);
            // $stmt->bindParam(':token_senha', $token);
            // $stmt->bindParam(':token_expiracao', $token_expiracao);

            // Executa a consulta
            $stmt->execute();

            // Envia o e-mail para o colaborador com o link para criar a senha
            // $this->sendPasswordCreationEmail($email, $token);

        }
        catch(Exception $erro){
            error_log($erro->getMessage());
            // echo "Erro ao cadastrar colaborador,  tente novamente mais tarde.";
            $result = false;
        }
        return $result;
    }

    // private function sendPasswordCreationEmail($email, $token) {
    //     $link = "https://seusite.com/definir_senha.php?token=" . $token;

    //     $subject = "Criação de Senha de Acesso";
    //     $message = "Olá, por favor, crie sua senha através do link abaixo:\n\n" . $link;
    //     $headers = "From: noreply@seusite.com";

    //     // Função mail nativa do PHP para envio de e-mail
    //     mail($email, $subject, $message, $headers);
    // }
}

