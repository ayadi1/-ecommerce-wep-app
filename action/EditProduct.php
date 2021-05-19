<?php
if(isset($_POST))
{
    if(!empty($_POST['p-name'])&&!empty($_POST['p-price'])&&!empty($_POST['p-description'])&&!empty($_POST['category'])&&!empty($_POST['id']))
    {
        require_once '../method/db.php';
        $id = conn::test_input($_POST['id']);
        $category = conn::test_input($_POST['category']);
        $name = conn::test_input($_POST['p-name']);
        $price = conn::test_input($_POST['p-price']);
        $description = conn::test_input($_POST['p-description']);
        try{
            $sql = "UPDATE `produit` SET `nom`='$name',`prix`='$price',`discription`='$description',`id_admin`=1,`id_categorie`='$category' WHERE `id_produit` =  '$id'";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
            echo "<script>Swal.fire(   'Good job!',   'product updated!',   'success' )</script></script>";
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
}