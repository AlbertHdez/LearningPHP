<?php

class DB{
    private $db_info = array(
        "host" => "",
        "db" => "",
        "user" => "",
        "pass" => "",
        "charset" => ""
    );

    public function __construct(){
        $this->db_info['host'] = 'localhost';
        $this->db_info['db'] = 'survey';
        $this->db_info['user'] = 'root';
        $this->db_info['pass'] = '';
        $this->db_info['charset'] = 'utf8mb4';
    }

    public function connect(){
        try{
            $connection = 
            "mysql:host={$this->db_info['host']};".
            "dbname={$this->db_info['db']};".
            "charset={$this->db_info['charset']}";

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => FALSE
            ];

            $pdo = new PDO(
                $connection,
                $this->db_info['user'],
                $this->db_info['pass'],
                $options
            );

            return $pdo;
        }catch(PDOException $err){
            print "[ERROR] {$err->getMessage()} <br>";
            die();
        }
    }
}