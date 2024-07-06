<?php
session_start();
require "functionsDB.php";

$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$phone = $_POST['inputPhone'];
$date = $_POST['inputNascimento'];
$password = $_POST['inputPassword'];

RegisterUser($name, $email, $phone, $date, $password);