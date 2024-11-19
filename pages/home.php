<?php

// Récupérer toutes les données nécessaires
$lesHotels = $c_User->selectAllHotels();
$lesRestaurants = $c_User->selectAllRestaurants();
$lesSports = $c_User->selectAllSports();
$lesCultures = $c_User->selectAllCultures();

// Inclure le carrousel de la page d'accueil
require_once("composants/carroussel-home.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
</head>

<body>
    <!-- Formulaire de sélection pour afficher les hôtels, restaurants, ou loisirs -->
    <form method="POST">
        <button type="submit" name="Hotels">Voir les hôtels</button>
        <button type="submit" name="Restaurants">Voir les restaurants</button>
        <button type="submit" name="Loisirs">Voir les loisirs</button>
    </form>

    <?php
    // Affichage des vues en fonction du bouton pressé
    if (isset($_POST['Hotels'])) {
        require_once("vue/vue_les_hotels.php");
    }

    if (isset($_POST['Restaurants'])) {
        require_once("vue/vue_les_restaurants.php");
    }

    if (isset($_POST['Loisirs'])) {
        require_once("vue/vue_les_loisirs.php");
    }
    ?>

    <!-- Bandeau des cookies -->
    <?php include 'vue/cookie_banner.php'; ?>

</body>

</html>