<?php
require_once 'controller/instanceFilm.php';
// On créé un JSON avec le contenu de getFilms qui contient la liste de tout les produits
header ('Content-Type: application/json');
echo json_encode($getFilms, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
