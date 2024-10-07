<?php
require_once "./model/colaborador.php";

class ColabController {
    private $colaboradorModel;

    public function __construct() {
        $this->colaboradorModel = new Colaborador();
    }

    // Função para cadastrar colaborador
    public function CadastrarColaborador($dados) {
        // Validação básica dos dados
        if (!isset($dados['nome'], $dados['logradouro'], $dados['numero_residencia'], $dados['data_nascimento'], $dados['bairro'], $dados['cidade'], $dados['cpf'], $dados['telefone'], $dados['email'])) {
            return "Por favor, preencha todos os campos obrigatórios.";
        }

        // Chamar o método do model para cadastrar no banco de dados
        $resultado = $this->colaboradorModel->AddColaborador(
            $dados['nome'],
            $dados['logradouro'],
            $dados['numero_residencia'],
            $dados['data_nascimento'],
            $dados['bairro'],
            $dados['cidade'],
            $dados['cpf'],
            $dados['telefone'],
            $dados['email'],
            $dados['complemento'] ?? null // Usando operador de coalescência para tratar 'complemento' opcional
        );

        return $resultado; // Supondo que sua função AddColaborador retorne uma mensagem de sucesso ou erro
    }

    // Aqui você pode adicionar outras funções para outras ações
}

// Verificação de qual ação executar
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao'])) {
    $controller = new ColabController();
    
    switch ($_POST['acao']) {
        case 'cadastrar':
            $resultado = $controller->CadastrarColaborador($_POST);
            break;


        // Adicione mais casos conforme necessário
        default:
            $resultado = "Ação não reconhecida.";
            break;
    }

    echo $resultado;
}
