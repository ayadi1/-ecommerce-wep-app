<?php

if(isset($_POST)){
    if(!empty($_POST['c-name'])){
        require_once '../method/admin.php';
        require_once '../method/db.php';
        $cat = conn::test_input($_POST['c-name']);

        $r = admin::Addcategories($cat);
        echo "<script>Swal.fire(   'Good job!',   'category added!',   'success' )</script>";

    }else{
        echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'write all required information  !'})</script>";

    }
}