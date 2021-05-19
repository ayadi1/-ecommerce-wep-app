<?php 
if(isset($_POST)){
    if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['ville']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password']) && !empty($_POST['r_password']) ){
        require_once '../method/db.php';
        require_once '../method/client.php';
        $name = conn::test_input($_POST['name']);
        $address = conn::test_input($_POST['address']);
        $ville = conn::test_input($_POST['ville']);
        $email = conn::test_input($_POST['email']);
        $phone = conn::test_input($_POST['phone']);
        $password = conn::test_input($_POST['password']);
        $r_password = conn::test_input($_POST['r_password']);
        if($password == $r_password){
            $r = client::AddClient($name,$email,$password,$address,$ville,$phone);
            echo client::$errorMgs;
        }
    }else{
        echo "<script>Swal.fire({icon: 'error',title: 'Oops...',text: 'Something went wrong!'})</script>";
    }
}