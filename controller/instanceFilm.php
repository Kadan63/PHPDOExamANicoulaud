<?php include 'model/film.php';

$url = '/PHPDOExamANicoulaud/';

// Création de l'instance de l'objet Film.

$film = new Film;

// Création d'une variable contenant la liste de tous les films

$getFilms = $film->listFilms();

// Si il y a un id dans l'url et pas autre chose
// On appelle la méthode pour avoir un film précis et on lui passe en param l'id du film récupéré depuis l'url
if (!empty($aParam[3])) :
    $getDetail = $film->detailFilm($aParam[3]);
endif;

// On teste l'url pour voir si on trouve un param 3 qui contient l'id et un param 4 "crud" qui veut dire qu'on a utilisé le formulaire
// Si ces deux conditions sont reunies, alors on appelle la methode pour modifier le produit en récuperant l'id et toutes les autres info depuis le tableau $_POST généré par le formulaire
if(!empty($aParam[4])AND($aParam[4]=='crud')) :
    $film->modifyFilm($_POST['idFilm'], $_POST['categorie'], $_POST['titre'], $_POST['synopsis'], $_POST['date'], $_POST['images']);
    header("Location: {$url}films");
endif;

// Même principe qu'au dessus "crud" signifie formulaire utilisé mais cette fois pas d'id ; on appelle la méthode pour ajouter et on passe la tableau $_POST en param
if (!empty($aParam[3]) AND ($aParam[3]=='crud')) :
    $film->addFilm($_POST['idFilm'], $_POST['categorie'], $_POST['titre'], $_POST['synopsis'], $_POST['date'], $_POST['images']);
    header("Location: {$url}films");
endif;

// On fait vérifie les !empty et s'il y a un id en param 3 et le mot "delete" en param 4
// Si les deux conditions sont reunies, alors on appelle la methode pous suprimmer un film
// On lui passe l'id du produit récupéré depuis l'url en parametre
if (!empty($aParam[4])) :
    if(!empty($aParam[3])AND($aParam[4]=='delete')) :
        $film->deleteFilm($aParam[3]);
        header("Location: {$url}films");
    endif;
endif;

// Lien vers l'API : insérer l'ID du produit en quatrième paramètre.

if (!empty($aParam[3]) AND ($aParam[3]=='films') AND !empty($aParam[4])) :
    $getDetail = $film->detailFilm($aParam[4]);
endif;
?>
