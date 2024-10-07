<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Colaborador</title>
</head>
<body>
    <h2>Formulário de Cadastro de Colaborador</h2>
    <form action="/controller/colabController.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        
        <label for="nome">Nome*:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="logradouro">Logradouro*:</label><br>
        <input type="text" id="logradouro" name="logradouro" required><br><br>

        <label for="numero_residencia">Número da Residência*:</label><br>
        <input type="text" id="numero_residencia" name="numero_residencia" required><br><br>

        <label for="data_nascimento">Data de Nascimento*:</label><br>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

        <label for="bairro">Bairro*:</label><br>
        <input type="text" id="bairro" name="bairro" required><br><br>

        <label for="cidade">Cidade*:</label><br>
        <input type="text" id="cidade" name="cidade" required><br><br>

        <label for="cpf">CPF* (XXX.XXX.XXX-XX):</label><br>
        <input type="text" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required><br><br>

        <label for="telefone">Telefone*:</label><br>
        <input type="tel" id="telefone" name="telefone" pattern="\(\d{2}\)\d{5}-\d{4}" required><br><br>

        <label for="email">E-mail*:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="complemento">Complemento:</label><br>
        <input type="text" id="complemento" name="complemento"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
