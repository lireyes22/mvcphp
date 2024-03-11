<?php

namespace App\Models;

use PDO;

class Contact{
    protected $db_host = DB_HOST;
    protected $db_user = DB_USER;
    protected $db_pass = DB_PASS;
    protected $db_name = DB_NAME;
    protected $connection;

    public function __construct(){
        $this->connection();
    }

    public function connection(){
        try {
            // Intenta establecer la conexión con la base de datos
            $dsn = "mysql:host={$this->db_host};dbname={$this->db_name};charset=utf8";
            $this->connection = new PDO($dsn, $this->db_user, $this->db_pass);
            if(!$this->connection){
                die('Conexión Fallida');
            }
        } catch (PDOException $e) {
            // Maneja la excepción si la conexión falla
            die("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }

    public function query(){
        $stmt = $this->connection->prepare('SELECT * FROM contacts');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}