<?php
session_start();
$id_admin = $_SESSION['admin']['id'];
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$imageName =  substr(str_shuffle($permitted_chars), 0, 16);
$isImg = true;
if (isset($_FILES)) {


    if (isset($_FILES['image'])) {
        // var_dump($_FILES['image']);

        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $parts = explode('.', $file_name);
        $file_extension = end($parts);
        // var_dump($file_extension);

        
        if ($file_extension == "jpeg" || $file_extension == "jpg" || $file_extension == "png" || $file_extension == "PNG") {
            if ($file_size < 2097152) {
               
                
                
                move_uploaded_file($file_tmp, "../assets/images/uploads/" . $imageName . $file_name);
                
            } else {
                echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'File size must be < 2 MB !'})</script>";
            }
        } else {
            $isImg = false;

        }
    }
} else {
    echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'no image selected!'})</script>";
}

if (isset($_POST)) {
    if (!empty($_POST['p-name']) && !empty($_POST['p-price']) && !empty($_POST['category']) ) {
        require_once '../method/db.php';
        require_once '../method/produit.php';
        $name = conn::test_input($_POST['p-name']);
        $price = conn::test_input($_POST['p-price']);
        $category = conn::test_input($_POST['category']);
        $category = conn::test_input($_POST['category']);
        $description = conn::test_input($_POST['p-description']);
        
        if($isImg){
            $image = $imageName . $file_name;

        }else{
            $image = '';
            // echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'this is not img!'})</script>";

        }
        
        try {
            
            $r = produit::Addproduit($name,$price,$description,$category,$image);
            echo "<script>Swal.fire(   'Good job!',   'product added!',   'success' )</script>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }else{
        echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'write all required information  !'})</script>";

    }
}
