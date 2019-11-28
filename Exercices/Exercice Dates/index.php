<!--
Auteur : Kevin Vaucher
Projet : Exercice 2 ICT-133 (Dates)
Description : Ecrire des dates sous différents formats
Version : 1.0
Date : 28.11.2019
-->

<?php
date_default_timezone_set('Europe/Zurich'); // Choix du fuseau horaire

$timestamp = time(); // Création de la variable timestamp
$timestamp = strtotime('17.09.2013'); // Date simulée

echo '<b>Exercice Dates</b>'."<br>"."<br>"; // Titre de la page

echo '1)    '.date("l d F Y", $timestamp)."<br>"; // Afficher une date sous ce format : Thursday 28 November 2019
echo '2)    '.date("M jS Y", $timestamp)."<br>"; // Afficher une date sous ce format : Nov 28th 2019
echo '3)    '.date("d/m/Y H:m:s a", $timestamp)."<br>"; // Afficher une date sous ce format : 28/11/2019 10:11:00 am
echo '4)    '.date("d M Y, H:m:s", $timestamp)."<br>"; // Afficher une date sous ce format : 28 Nov 2019, 10:11:00
echo '5)    '.date(DATE_RFC822, $timestamp)."<br>"; // Afficher une date sous ce format : Thu, 28 Nov 19 10:16:00 +0000
?>
