<?php
// Database.php
class Database
{
    private static $instance = null;
    private $connection;

    // Connexion à la BDD
    private function __construct()
    {
        try {
            $this->connection = new PDO("mysql:host=localhost;dbname=jo_paris", "root", "");
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    // Récupérer l'instance de la base de données
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Retourner la connexion PDO
    public function getConnection()
    {
        return $this->connection;
    }
}
