<?php
    session_start();
?>
<!DOCTYPE html5>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./assets/css/cadastro.css">
    <script type="text/javascript" src="./assets/javascript/cadastro.js" defer></script>
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <title>Cadastro</title>
</head>

<body>
    <section class="container">
        <div class="box">
            <svg class="seta" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
            <h3 class="messege">Preencha as informações para efetuar seu cadastro</h3>
            <form method="post" action="../processamento/processamento.php" id="formulario" onsubmit="return formAction.VerifyForm()">
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
                <img src="./assets/images/olho-fechado.png" id="icone" class="olho" >

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