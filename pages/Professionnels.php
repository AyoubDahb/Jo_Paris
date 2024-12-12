<?php

require_once '../JO-Tourisme2/controleur/config_bdd.php';  // Met à jour avec le bon chemin du fichier contenant la classe Database

class Professionnel
{
    public static function getAll()
    {
        $db = Database::getInstance()->getConnection(); // Utilisation de la connexion PDO
        $stmt = $db->query("SELECT * FROM client_pro");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($iduser)
    {
        $db = Database::getInstance()->getConnection(); // Utilisation de la connexion PDO
        $stmt = $db->prepare("SELECT * FROM client_pro WHERE iduser = :iduser");
        $stmt->execute(['iduser' => $iduser]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($iduser, $data)
    {
        $db = Database::getInstance()->getConnection(); // Utilisation de la connexion PDO
        $stmt = $db->prepare("UPDATE client_pro SET nom = :nom, email = :email, num_Siret = :num_Siret, adresse = :adresse WHERE iduser = :iduser");
        $stmt->execute([
            'iduser' => $iduser,
            'nom' => $data['nom'],
            'email' => $data['email'],
            'num_Siret' => $data['num_Siret'],
            'adresse' => $data['adresse']
        ]);
    }

    public static function delete($iduser)
    {
        try {
            $db = Database::getInstance()->getConnection();
            $stmt = $db->prepare("DELETE FROM client_pro WHERE iduser = :iduser");
            $stmt->execute(['iduser' => $iduser]);

            if ($stmt->rowCount() === 0) {
                throw new Exception("Aucun utilisateur trouvé avec l'ID spécifié : $iduser");
            }
        } catch (PDOException $e) {
            die("Erreur SQL lors de la suppression : " . $e->getMessage());
        } catch (Exception $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
}
