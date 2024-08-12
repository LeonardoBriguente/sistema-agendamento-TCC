<?php
class Database{
    private $host;
    private $db_name;
    private $user;
    private $password;
    private $Connection;

    public function __construct($servidor, $banco, $usuario, $senha) {
        $this->host = $servidor;
        $this->db_name = $banco;
        $this->user = $usuario;
        $this->password = $senha;
    }

    public function Conect
}