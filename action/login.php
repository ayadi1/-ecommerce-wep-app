<?php

if(isset($_POST)){
    if(!empty($_POST['email'])&& !empty($_POST['password'])){
        require_once '../method/db.php';
        require_once '../method/client.php';
        $email = conn::test_input($_POST['email']);
        $password = conn::test_input($_POST['password']);
        $r = client::login($email,$password);
        echo client::$errorMgs;

    }else{
        echo "<script>Swal.fire({icon: 'error',title: 'Oops...',text: 'Something went wrong!'})</script>";

    }
}