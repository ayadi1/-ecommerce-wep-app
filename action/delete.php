<?php
if(isset($_GET)){
    if(isset($_GET['key']) && $_GET['key'] == 'pro' && !empty($_GET['id']) ){
       require_once '../method/db.php';
       $id = conn::test_input($_GET['id']);
       try{

           $sql = "DELETE FROM `produit` WHERE `id_produit` = '$id' ";
           $r = conn::DB('marcana')->prepare($sql);
           $r->execute();
           echo '<script>window.location.href = "../admin/index.php?p=product"</script>';

       }catch(PDOException $e){
           $e->getMessage();
       }
    }
}