<?php
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$imageName =  substr(str_shuffle($permitted_chars), 0, 16);

if (isset($_FILES) && isset($_POST)) {


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
                require_once '../method/db.php';
                $id = conn::test_input($_POST['id']);
                $image = $imageName . $file_name;
                move_uploaded_file($file_tmp, "../assets/images/uploads/" . $imageName . $file_name);
                try{
                    $sql = "UPDATE `produit` SET `img` = '$image' WHERE `id_produit` = '$id'";
                    $r = conn::DB('marcana')->prepare($sql);
                    $r->execute();
                    echo  "<script>Swal.fire(   'Good job!',   'img updated!',   'success' )</script></script>";
                }catch(PDOException $e){
                    echo $e->getMessage();
                }

            } else {
                echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'File size must be < 2 MB !'})</script>";
            }
        } else {
            echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'this not img !'})</script>";

        }
    }
} else {
    echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'no image selected!'})</script>";
}