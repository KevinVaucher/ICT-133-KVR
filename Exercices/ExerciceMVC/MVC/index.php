<?php
require_once('controller/controller.php');
$action = $_GET['action'];
switch ($action) {
    case 'movies':
        $title = 'Films';
        $content = 'Liste des films';
        require_once 'view/movies.php';
        break;
    case 'concerts':
        showConcerts();
        break;
    default:
        $title = 'Accueil';
        require_once 'view/home.php';
        break;
}
require_once 'gabarit.php';
?>
