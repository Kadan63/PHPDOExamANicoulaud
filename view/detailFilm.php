<?php include 'controller/instanceFilm.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail du film</title>
</head>
<body>
<!-- Affichage du détail du produit via l'objet créé par la requête 2 -->
    <h1><?php echo $getDetail[0]->Titre;?></h1>
    <p><b>Genre : </b><?php echo $getDetail[0]->Categorie;?></p>
    <p><b>Synopsis : </b><?php echo $getDetail[0]->resumefilm;?></p>
    <p><b>Date de sortie : </b><?php echo $getDetail[0]->AnneeSortie;?></p>
    <p><?php echo $getDetail[0]->Images;?></p>
    <a href="<?php echo $url ?>films"><button>Retourner consulter le catalogue</button></a>
</body>
</html>