<?php
 class produit{
        public  static  $errorMgs = [];

        public static function Addproduit($nom,$prix,$discription,$id_categorie)
        {
        require_once 'method/db.php';
        $nom = conn::test_input($nom);
        $prix = conn::test_input($prix);
        $discription = conn::test_input($discription);
        $id_categorie = conn::test_input($id_categorie);
        $sql = "INSERT INTO `produit`( `nom`, `prix`, `discription`, `id_admin`, `id_categorie`) VALUES ('$nom','$prix','$discription',1,'$id_categorie')";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        }
    public static function GetProduitList()
    {
        require_once 'db.php';
        $sql = "SELECT `id_produit`, `nom`, `prix`, `discription` FROM `produit`";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        return $r->fetchAll();
    }
}