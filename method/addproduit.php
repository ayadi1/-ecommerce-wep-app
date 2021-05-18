<?php
session_start();
$id_admin = $_SESSION['admin']['id'];
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$imageName =  substr(str_shuffle($permitted_chars), 0, 16);
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



        if ($file_extension === "jpeg" || $file_extension === "jpg" || $file_extension === "png" || $file_extension === "PNG") {
            echo  "extension not allowed, please choose a JPEG or PNG file.";
            if ($file_size < 2097152) {


                move_uploaded_file($file_tmp, "../assets/images/uploads/" . $imageName . $file_name);
                echo  "Success";
            } else {
                echo  'File size must be < 2 MB ';
            }
        } else {
            echo  'this is not img';
        }
    }
}

if (isset($_POST)) {
    if (!empty($_POST['v-nom']) && !empty($_POST['v-prix']) && !empty($_POST['categorie']) && !empty($_POST['v-type']) && !empty($_POST['v-carburant']) && !empty($_POST['v-vitesses'])) {
        require_once './db.php';
        $nom = conn::test_input($_POST['name']);
        $prix = conn::test_input($_POST['v-prix']);
        $categorie = conn::test_input($_POST['categorie']);
        $description = conn::test_input($_POST['description']);
        $image = $imageName . $file_name;
        $type = conn::test_input($_POST['v-type']);
        $Fuel = conn::test_input($_POST['v-carburant']);
        $speeds = conn::test_input($_POST['v-vitesses']);


        try {

            $sql = "INSERT INTO `car`(`nom`, `id_location`, `prix`, `id_categories`, `photo`, `description`, `type`, `Fuel`, `speeds`) VALUES ('$nom','$id_boutique','$prix','$categorie','$image','$description','$type','$Fuel','$speeds')";
            $r = conn::DB('turbocar')->prepare($sql);
            $r->execute();
            die();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    } else {
        var_dump($_POST);
        foreach ($_POST as $err => $nam) {
            if (empty($_POST[$err])) {
                //    echo $err.';';
            }
        }
    }
}
// var_dump($_SESSION['active_user']);
