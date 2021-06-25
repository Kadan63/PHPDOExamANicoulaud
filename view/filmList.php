<?php include ("controller/instanceFilm.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des films</title>
</head>
<body>
    <h1>Liste des films</h1>
    <a href="<?php echo $url?>form" title="Ajouter">Ajouter un film</a>
    <table style="border:1px solid black;width:100%;">
        <tr >
            <th style="text-align:left;">Titre</th>
            <th style="text-align:left;">Image</th>
            <th colspan="2" style="text-align:left;">Action</th>
        </tr>
        <!-- foreach pour explorer l'objet qui contient tous les films de la BDD obtenue via la premiere requete -->
        <?php foreach($getFilms as $key => $info):?>
        <tr>
            <td><?php echo $info->Titre;?></td>
            <td><?php echo $info->Images;?></td>
            <!-- on affiche les infos de chaque objet via la variables info du foreach -->
            <td><a href="<?php echo $url ?>detail/<?php echo $info->Id ?>">Détails</a></td>
            <td><a href="<?php echo $url ?>form/<?php echo $info->Id ?>" title="Modifier">Modifier</a></td>
            <td><a href="<?php echo $url ?>films/<?php echo $info->Id ?>/delete" title="Supprimer">Supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </table>


</body>
</html>
