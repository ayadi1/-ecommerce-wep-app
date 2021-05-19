<?php
if (isset($_POST)) {
    if (!empty($_POST['c-name']) && !empty($_POST['id'])) {
        require_once '../method/db.php';
        $id = conn::test_input($_POST['id']);
        $category = conn::test_input($_POST['c-name']);
        try {
            $sql = "UPDATE `categories` SET `nom`= '$category' WHERE `id_categorie` = '$id' ";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
            echo "<script>Swal.fire(   'Good job!',   'product updated!',   'success' )</script></script>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
