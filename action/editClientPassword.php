<?php
session_start();
if (isset($_SESSION) && !empty($_SESSION['client'])) {
    $id_client = $_SESSION['client']['id'];
    if (isset($_POST)) {
        if (!empty($_POST['o_pass']) && !empty($_POST['n_pass']) && !empty($_POST['r_pass'])) {
            require_once '../method/db.php';
            require_once '../method/client.php';
            $clientInfo = client::getClientInfo($id_client);
            $o_pass = conn::test_input($_POST['o_pass']);
            $n_pass = conn::test_input($_POST['n_pass']);
            $r_pass = conn::test_input($_POST['r_pass']);
            if (password_verify($o_pass, $clientInfo[0]['password'])) {
                if ($n_pass === $r_pass) {
                    $Npss = password_hash($r_pass, PASSWORD_DEFAULT);
                    client::updateClientPassword($id_client,$Npss);
                    echo  "<script>Swal.fire(   'Good job!',   'password updated!',   'success' )</script></script>";
                } else {
                    echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: ' password wrong!'})</script>";
                }

            } else {
                echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: ' old password wrong!'})</script>";
            }
        } else {
            echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: ' enter all required information!'})</script>";
        }
    }
}
