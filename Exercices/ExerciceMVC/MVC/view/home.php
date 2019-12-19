<?php
ob_start();
?>
    <a href='?action=movies'><img src="images/movies.jpg" height="250px"></a>
    <a href='?action=concerts'><img src="images/concerts.jpg" height="250px"></a>
<?php
$content = ob_get_clean();
?>