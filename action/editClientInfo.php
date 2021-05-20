<?php
session_start();
if (isset($_SESSION) && !empty($_SESSION['client'])) {
    $id_client = $_SESSION['client']['id'];

    if (isset($_POST)) {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['ville']) && !empty($_POST['tele'])) {


            require_once '../method/db.php';
            require_once '../method/client.php';
            $name = conn::test_input($_POST['name']);
            $email = conn::test_input($_POST['email']);
            $address = conn::test_input($_POST['address']);
            $ville = conn::test_input($_POST['ville']);
            $tele = conn::test_input($_POST['tele']);
            client::updateClientInfo($id_client,$name,$email,$address,$ville,$tele);
            echo "<script>Swal.fire(   'Good job!',   'information updated!',   'success' )</script></script>";
        }
    }
}
