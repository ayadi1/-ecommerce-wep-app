<?php
session_start();
if(isset($_SESSION)&&!empty($_SESSION['client'])){

    if(isset($_GET)){
        if(!empty($_GET['id_p'])){
            require_once '../method/order.php';
            $id_client = $_SESSION['client']['id'];
            $id_product = $_GET['id_p'];
            $r = order::AddToOrderList($id_client,$id_product);
            echo '<script>window.location.href = "../index.php?p=produit"</script>';
            
        }
    }
}else{
    echo '<script>window.location.href = "../index.php?p=produit"</script>';

}