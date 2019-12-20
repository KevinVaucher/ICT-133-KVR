<?php
function showConcerts()
{
    require_once('model/concerts.php');
    // Logique
    unset($concerts[5]);
    unset($concerts[7]);
    unset($concerts[8]);

    require_once('view/concerts.php');
}

?>
