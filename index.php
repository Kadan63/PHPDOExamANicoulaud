<?php

$serveur = $_SERVER['REQUEST_URI'];
$aParam = explode("/", $serveur);

switch ($aParam[2]) {

    case 'films':
    include 'view/filmList.php';
    break;

    case 'detail':
    include 'view/detailFilm.php';
    break;

    case 'form':
        include 'view/form.php';
        break;

    case 'api':
        if (!empty ($aParam[2]) AND $aParam[3]=='films' AND !empty($aParam[4])) :
        include 'view/apiFilm.php';
        endif;
        break;
    default:
        include 'view/404.php';
    break;
        }
?>