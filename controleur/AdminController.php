<?php
require_once './pages/Professionnels.php';

class AdminController
{
    // Afficher la liste des professionnels
    public function listeProfessionnels()
    {
        $professionnels = Professionnel::getAll(); // Récupérer tous les professionnels
        include 'vue/professionnels_list.php'; // Vue pour afficher la liste
    }

    // Modifier un professionnel
    public function modifierProfessionnel($iduser)
    {
        $professionnel = Professionnel::getById($iduser); // Récupérer le professionnel à modifier

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nom' => $_POST['nom'],
                'email' => $_POST['email'],
                'num_Siret' => $_POST['num_Siret'],
                'adresse' => $_POST['adresse']
            ];
            Professionnel::update($iduser, $data); // Mettre à jour le professionnel
            header("Location: index.php?controller=admin&action=listeProfessionnels");
            exit;
        }
        include 'vue/professionnels_edit.php'; // Vue pour éditer le professionnel
    }

    // Supprimer un professionnel
    public function supprimerProfessionnel($iduser)
    {
        Professionnel::delete($iduser); // Supprimer le professionnel
        header("Location: index.php?controller=admin&action=listeProfessionnels");
        exit;
    }
}
