<?php
 class produit{
        public  static  $errorMgs = [];

        public static function Addproduit($nom,$prix,$discription,$id_categorie,$img)
        {
        require_once '../method/db.php';
        $nom = conn::test_input($nom);
        $prix = conn::test_input($prix);
        $discription = conn::test_input($discription);
        $id_categorie = conn::test_input($id_categorie);
        $sql = "INSERT INTO `produit`( `nom`, `prix`, `discription`, `id_admin`, `id_categorie`, `img`) VALUES ('$nom','$prix','$discription',1,'$id_categorie','$img')";
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
    public static function getProductById($id)
    {
        require_once 'db.php';
        try{
            $sql = "SELECT p.nom,p.prix,p.discription,p.img ,c.nom as category  FROM produit p INNER JOIN categories c on c.id_categorie = p.id_categorie WHERE `id_produit` = '$id' ";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
            return $r->fetchAll();

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public static function getAllProduct()
    {
        require_once 'db.php';
        try {
            $sql = "SELECT p.id_produit, p.nom,p.prix,p.discription,p.img ,p.img ,c.nom as category  FROM produit p INNER JOIN categories c on c.id_categorie = p.id_categorie  ";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
            return $r->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}