<?php
function ConnectDB(){
    $connection = mysqli_connect("localhost", "root", "", "projeto_stima");
    return ($connection);
}

function RegisterUser($name, $email, $phone, $date, $password){
    $connection = ConnectDB();
    $insert = "INSERT INTO usuario VALUES ('$name', '$email', $phone, '$date', '$password')";

    mysqli_query($connection, $insert);
}
?>