<!--
Auteur : Kevin Vaucher
Projet : Exercice Traduction HTML et tableau
Version : 1.0
Date : 29.11.2019
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="js/script.js"></script>
</head>
<body>

<h1>SI-CMI2a</h1>
<?php
$tab = array("Fabien", "David", "Miguel", "Benoît", "Johnny", "Kevin", "Christopher", "Dmitri", "etc.");
for ($i = 1; $i <= 9; $i++) {
    echo("<li>$tab[$i]</li>" . "<br>");
}
?>
</body>
</html>