<?php
if(isset($_POST)){
    require_once '../method/db.php';
    require_once '../method/admin.php';
    $name = conn::test_input($_POST['name']);
    $email = conn::test_input($_POST['email']);
    $adminInfo = admin::updateAdminInfo($name,$email);
    echo "<script>Swal.fire(   'Good job!',   'information updated!',   'success' )</script></script>";
    
    
}