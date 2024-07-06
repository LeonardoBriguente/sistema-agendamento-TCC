<?php
    session_start();
?>
<!DOCTYPE html5>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
    <script type="text/javascript" src="../javascript/cadastro.js" defer></script>
    <title>Cadastro</title>
</head>

<body>
    <section class="container">
        <div class="box">
            <img class="seta" src="../imagens/seta-esquerda.png">
            <h3 class="messege">Preencha as informações para efetuar seu cadastro</h3>
            <form method="post" action="../processamento/processamento.php" id="formulario" onsubmit="return VerifyForm()">
                <label class="informacoes" for="inputName">Nome:</label>
                <input class="entrada-dados" type="text" id="inputName" name="inputName" placeholder="Digite seu nome" >

                <label class="informacoes" for="inputEmail">E-mail:</label>
                <input class="entrada-dados"  type="email" id="inputEmail" name="inputEmail" placeholder="Digite seu e-mail" >

                <label class="informacoes" for="inputPhone">Telefone:</label>
                <input class="entrada-dados" type="text" id="inputPhone" name="inputPhone" placeholder="Dgite seu telefone">

                <label class="informacoes" for="inputNascimento">Data de Nascimento:</label>
                <input class="entrada-dados" id="inputNascimento"  type="date" name="inputNascimento" >

                <label class="informacoes" for="inputPassword">Senha:</label>
                <input class="entrada-dados" id="inputPassword" type="password" name="inputPassword" placeholder="Digite sua senha">

                <label class="informacoes" for="review-password">Confrmar Senha:</label>
                <input class="entrada-dados" type="password" id="review-password" name="review-password" placeholder="Digite sua senha">

                <!--AJUSTAR RESPONSIVIDADE (location) OLHO, principalmente nas mensagem de erro-->
                <img src="../imagens/olho-fechado.png" id="icone" class="olho" onclick="ShowPassword()">

                <span id="aviso">*As senhas não correspondem</span>

                <div class="manter-login">
                    <input class="checkbox" type="checkbox" id="acesso_rapido" name="acesso_rapido">

                    <label class="salvar-login" for="acesso_rapido">Salvar informações para efetuar o acesso rápido</label>
                </div>

                <!--REQUIRED NÃO FUNCIONA COM AS SENHAS COLOCADAS, ARRUMAR USANDO JS OU FÉ-->
                <button class="botao" type="submit">Finalizar Cadastro</button>
            </form>
        </div>
    </section>
</body>

</html>