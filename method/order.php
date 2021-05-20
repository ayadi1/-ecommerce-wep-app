<?php

class order
{
    public static function orderListByidClient($id_client)
    {
        require_once 'method/db.php';
        $id = conn::test_input($id_client);
        $sql = "SELECT c.id_commandes as id_commande ,p.nom,p.prix,cat.nom as category from commandes c INNER JOIN client cl on c.id_client = cl.id_client INNER JOIN produit p on c.id_produit = p.id_produit INNER JOIN categories cat on p.id_categorie = cat.id_categorie WHERE cl.id_client = '$id' ";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        if ($r->rowCount() > 0) {
            return $r->fetchAll();
        } else {
            return null;
        }
    }
    public static function CountOrderByCLient($id_client)
    {
        require_once 'method/db.php';
        $id = conn::test_input($id_client);
        $sql = "SELECT COUNT(*) as orderNumber FROM `commandes` WHERE `id_client` = '$id' GROUP by id_client";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        if ($r->rowCount() > 0) {
            return $r->fetchAll();
        } else {
            return null;
        }
    }
    public static function AddToOrderList($id_client, $id_product)
    {
        require_once '../method/db.php';
        $id_client = conn::test_input($id_client);
        $id_product = conn::test_input($id_product);
        try {
            $sql = "INSERT INTO `commandes`( `id_client`, `id_produit`) VALUES ('$id_client','$id_product')";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function getOrderNumber()
    {
        try {
            require_once 'db.php';

            $sql = "SELECT COUNT(*) as number FROM `commandes` ";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
            if ($r->rowCount() > 0) {
                return $r->fetchAll();
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
