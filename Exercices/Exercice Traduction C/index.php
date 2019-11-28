<!--
Auteur : Kevin Vaucher
Projet : Exercice 1 ICT-133 (Traduction C vers PHP)
Date : 21.11.2019
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$value = 20;
$step = 3;

$i = 0;
    while ($i < 10){
    if($value >= 30) {
        echo "Le nombre vaut $value <br>";
    }
        else{
            echo "Nombre trop petit <br>";
        }
    $value += $step;
        $i++;
}
?>
</body>
</html>

