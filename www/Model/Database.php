<?php

require_once __DIR__ . '/../Config/env.php';

/**
 * Classe do banco de dados utilizando o pattern Singleton
 */
class Database extends PDO
{
    private string $host = DB_HOST;
    private string $db = DB_DB;
    private string $username = DB_USERNAME;
    private string $password = DB_PASSWORD;
    private static $instance = null;
    private PDO $conn;

    /**
     * Método construtor da classe
     */
    private function __construct()
    {
        $this->conn = $this->conn();
    }

    /**
     * Conexão com o banco de dados usando o padrão Singleton
     *
     * @return PDO
     */
    private function conn() : PDO
    {
        $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", 
            $this->username, 
            $this->password);

        return $conn;
    }

    /**
     * Método para instanciar uma nova conexão com o banco de dados
     *
     * @return Database
     */
    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    /**
     * Método para instanciar uma nova conexão com o banco de dados
     * @return PDO
     */
    public function getConnection() : PDO
    {
        return $this->conn;
    }
}