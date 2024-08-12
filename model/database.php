<?php
class Database
{
    private $host;
    private $db_name;
    private $user;
    private $password;
    private $connection;

    public function __construct($servidor, $banco, $usuario, $senha)
    {
        $this->host = $servidor;
        $this->db_name = $banco;
        $this->user = $usuario;
        $this->password = $senha;
    }

    public function Connect()
    {
        $this->connection = null;
        try {
            $this->connection = new PDO("msql: host=" . $this->host . "dbname=" . $this->db_name, $this->user, $this->password);
        }
        catch (PDOException $erro) {
            echo "Erro de conexão com o banco " . $erro->getMessage();
        }
        return $this->connection;
    }
}
