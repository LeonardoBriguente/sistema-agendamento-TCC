<!DOCTYPE html>
<html lang=pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./view/assets/css/index.css">
    <script src="https://kit.fontawesome.com/553722128b.js" crossorigin="anonymous"></script>
    <title>Bem vindo ao Stima Studio</title>
</head>

<body>
    <section class="body">
        <main>
            <section class="welcome">
                <img src="./view/assets/images/logo-studio.png">
                <h2 class="text-welcome">Bem vindo ao Stima Studio</h2>

            </section>

            <section class="form">
                <form>
                    <div class="input-box">
                        <i class="fa-regular fa-envelope espaco"></i>
                        <input type="email" id="inputEmail" name="inputEmail" placeholder="E-mail" required>
                    </div>

                    <!-- Verificar tamanho das Divs -->
                    <div class="input-box">
                        <i class="fa-solid fa-lock espaco"></i>
                        <input type="password" id="inputPassword" name="inputPassword" placeholder="Senha">
                        <i class="fa-solid fa-eye-slash"></i>
                    </div>

                    <button type="submit">ENTRAR</button>
                </form>
            </section>
        </main>
    </section>
</body>

</html>