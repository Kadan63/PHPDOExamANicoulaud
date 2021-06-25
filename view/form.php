<?php include 'controller/instanceFilm.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'ajout ou de suppression</title>
</head>
<body>
    <!-- dans l'action du formulaire on verifie si le param 3 est vide ou non s'il n'est pas vide (cela veut dire qu'il contient un id de produit et donc qu'on et sur la modification) donc on écrit l'id du produit dans l'url -->
    <form method='post' action="<?php echo $url ?>films/<?php if (!empty($aParam[3])): echo $getDetail[0]->Id."/"; endif; ?>crud">
        <!-- Pour chaque champ on attribue une valeur si il y a un id dans l'url, il s'agira les données du produit correspondant -->
    <input type="hidden" value="<?php if (!empty($aParam[3])): echo $getDetail[0]->Id; endif; ?>" name="idFilm">
        <p>
            <label for="name">Titre</label>
            <input type="text" name="titre" id="titre" <?php if (!empty($aParam[3])): ?> value="<?php echo $getDetail[0]->Titre; ?>"<?php endif; ?>/>
        </p>
        <p>
            <label for="categorie">Catégorie</label>
            <input type="text" name="categorie" id="categorie"<?php if (!empty($aParam[3])): echo $getDetail[0]->Categorie; endif; ?>/>
        </p>
        <p>
            <label for="synopsis">Synopsis</label>
            <textarea name="synopsis" id="synopsis" <?php if (!empty($aParam[3])): ?> value="<?php echo $getDetail[0]->resumefilm; ?>"<?php endif; ?>/></textarea>
        </p>
        <p>
            <label for="date">Date de sortie - Format AAAA-MM-JJ</label>
            <input type="text" name="date" id="date" <?php if (!empty($aParam[3])): ?> value="<?php echo $getDetail[0]->AnneeSortie; ?>"<?php endif; ?>/>
        </p>
        <p>
            <label for="images">Images</label>
            <input type="text" name="images" id="images" <?php if (!empty($aParam[3])): ?> value="<?php echo $getDetail[0]->Images; ?>"<?php endif; ?>/>
        </p>
        <p><input type="submit" value="Valider">
        </p>
    </form>
</body>
</html>
