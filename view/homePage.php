<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>

<body>
    <?php
    require_once "../model/database.php";
    $database = new Database("localhost", "ohiosystem", "root", "");
    $conexao = $database->Connect();
    ?>
</body>

</html>