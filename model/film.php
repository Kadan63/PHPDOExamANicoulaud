<?php
class Film{

    public function __construct(){

    }
    /**
     * ConnexionBDD Classique
     * @return [type] [description]
     */
    private function connexionBDD()
    {
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $bddname = 'netfloo';

        // Connexion à la BDD et gestion des erreurs avec try & catch

        try{
            $dbc = new PDO("mysql:host=$servername;dbname=$bddname;charset=utf8", $username, $password);
            $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbc;
        }
        catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            echo "Erreur code : ". $e->getCode();
        }
    }
        /**
     * Requete SELECT ALL en utilisant prepare()
     * @return [type] [description]
     */
    public function listFilms(){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('SELECT * FROM films');
        $req->execute();
        $films = $req->fetchAll(PDO::FETCH_OBJ);
        return $films;
    }
        /**
     * Requete pour récupérer un film en utilisant prepare()
     * Et bindParam()
     */
    public function detailFilm($id){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('SELECT * FROM films WHERE Id = :id');
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
        $films = $req->fetchAll(PDO::FETCH_OBJ);
        return $films;
    }
    // Requete permettant de modifier un produit en base en utilisant prepare et bindParam

    public function modifyFilm($idFilm, $categorie, $titre, $synopsis, $date, $images){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('UPDATE films SET Categorie = :categorie, Titre = :titre, resumefilm = :synopsis, AnneeSortie = :date, Images = :images WHERE Id = :idFilm');
        $req->bindParam(':idFilm', $idFilm);
        $req->bindParam(':categorie', $categorie);
        $req->bindParam(':titre', $titre);
        $req->bindParam(':synopsis', $synopsis);
        $req->bindParam(':date', $date);
        $req->bindParam(':images', $images);
        $req->execute();
    }
     
    // Requete pour Ajouter un film en $bdd

    public function addFilm($idFilm, $categorie, $titre, $synopsis, $date, $images){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('INSERT INTO films (Categorie, Titre, resumefilm, AnneeSortie, Images) VALUES (:categorie, :titre, :synopsis, :date, :images)');
        $req->bindParam(':categorie', $categorie);
        $req->bindParam(':titre', $titre);
        $req->bindParam(':synopsis', $synopsis);
        $req->bindParam(':date', $date);
        $req->bindParam(':images', $images);
        $req->execute();
    }
        /**
     * Requete pour supprimer un produit en BDD
     * Cette fois un seul bindParam juste pour le WHERE
        */
    public function deleteFilm($idFilm){
        $dbc = $this->connexionBDD();
        $req = $dbc->prepare('DELETE FROM films WHERE Id = :idFilm');
        $req->bindParam(':idFilm', $idFilm);
        $req->execute();
    }

}