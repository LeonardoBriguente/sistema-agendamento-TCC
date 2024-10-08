<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/homePage.css">
    <script type="text/javascript" src="./assets/javascript/homePage.js" defer></script>
    <title>Página Inicial</title>
</head>

<body style="background-color: purple;">
    <header class="header">
        <div class="logo-bar">
            <!-- IDEIA: Fazer um hambumber animado ao clicar. -->
            <i id="hamburguer" class="fa-solid fa-bars"></i>

            <h2 class="title" style="justify-self: center;"><a href="./homePage.php" id="title">Stima Studio Beauty</a></h2>

        </div>


        <nav class="navbar">
            <!-- IDEIA: Barra lateral esquerda que se sobrepõe a agenda-->

            <div class="sidebar">
                <ul class="menu">
                    <!-- IDEIA: Colocar icons -->
                    <li class="topico"><a class="link" href="./homePage.php">Agenda</a></li>
                    <li class="topico"><a href="#">Perfil</a></li>
                    <li class="topico"><a href="#">Clientes</a></li>
                    <li class="topico"><a href="#">Finaceiro</a></li>
                </ul>
            </div>

        </nav>
    </header>

    <main class="calendar-conteiner">
        <section class="controll-calendar">
            <!-- Botões de seleção do mês -->
        </section>
        <!-- <div class="content">
            <h1>Conteúdo da Página</h1>
            <p>A agenda ou qualquer outro conteúdo estará aqui. A barra lateral se sobrepõe a este conteúdo.</p>
        </div> -->

        <section class="calendar">
            <!-- Fazer o cabeçalho dp calendário e criar os elementos restantes usando JS -->
        </section>
        <!-- IDEIA: Estruturar a aegdan dentro da Main, ela focara ao lado esquerdo do visor -->
    </main>

    <section class="diario">
        <!-- IDEIA: Seção onde os atendimentos do dia selecionado serão exibidos com clareza -->
    </section>
    <!-- Elaborar a agenda utilizando html e css para o calendário. JS pode ser usando para interação com a agenda. Estudar sobre a classe Date do JS-->
</body>

</html>