<?php
ob_start();
$movies = [
    ['title' => 'Jumanji: Next Level', 'audio' => 'Doublé en français', 'showtime' => '18:00'],
    ['title' => 'La Reine des neiges 2', 'audio' => 'Doublé en français', 'showtime' => '15:30'],
    ['title' => 'Last Christmas', 'audio' => 'Standard', 'showtime' => '21:00'],
    ['title' => 'La Famille Addams', 'audio' => 'Standard', 'showtime' => '15:30'],
    ['title' => 'Le Meilleur reste à venir', 'audio' => 'Doublé en français', 'showtime' => '15:50'],
    ['title' => 'À couteaux tirés', 'audio' => 'Standard', 'showtime' => '18:10'],
    ['title' => 'Joker', 'audio' => 'Doublé en français', 'showtime' => '20:45']
];

?>
<h1>Liste des films</h1>
<?php
$nbmovies = count($movies);
echo "<h2>" . "Il y a actuellement " . $nbmovies . " films" . "</h2>";
?>
<table class="table">
    <thead>
    <tr>
        <th>Titre</th>
        <th>Audio</th>
        <th>Scéance</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($movies as $movie) {
        echo "<tr><td>" . $movie['title'] . "</td><td>" . $movie['audio'] . "</td><td>" . $movie['showtime'] . "</td>";
    }
    ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
?>
