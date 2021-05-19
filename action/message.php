<?php

if (isset($_POST)) {
    if (!empty($_POST['name']) && !empty($_POST['object']) && !empty($_POST['email']) && !empty($_POST['msg'])) {
        require_once '../method/db.php';
        require_once '../method/message.php';
        $name = conn::test_input($_POST['name']);
        $object = conn::test_input($_POST['object']);
        $email = conn::test_input($_POST['email']);
        $msg = conn::test_input($_POST['msg']);
        message::sendMessage($email,$name,$msg);
        echo "<script>Swal.fire(   'Good job!',   'Your message has been sent!',   'success' )</script>";

    } else {
        echo "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'write all required information  !'})</script>";
    }
}
