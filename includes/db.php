<?php
class DB
{
    private $host,
        $db,
        $user,
        $pass,
        $charset;

    public function __construct()
    {
        $this->host     = 'localhost';
        $this->db       = 'compras';
        $this->user     = 'root';
        $this->pass     = '';
        $this->charset  = 'utf8mb4';
    }

    public function connect()
    {
        try {
            $connection = "mysql:host={$this->host};" .
                "dbname={$this->db};" .
                "charset={$this->charset}";
            $options = [
                PDO::ATTR_ERRMODE           => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES  => FALSE
            ];

            $pdo = new PDO(
                $connection,
                $this->user,
                $this->pass,
                $options
            );
            return $pdo;
        } catch (PDOException $err) {
            print "[ERROR CONEXION] {$err->getMessage()} <br>";
            die();
        }
    }
}
