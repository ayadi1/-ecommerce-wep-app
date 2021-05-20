<?php
class client{

    public  static  $errorMgs = [];
    // login
    public  static function login($user_email, $user_password)
    {
        require_once '../method/db.php';

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = test_input($user_email);
        $password = test_input($user_password);
        try {

            $r = conn::DB("marcana")->prepare("SELECT * from client where email = '$email'");
            $r->execute();
        } catch (PDOException  $e) {
            echo  "<br>" . $e->getMessage();
        }

        if ($r->rowCount() > 0) {
            $r = $r->fetch();
            // var_dump($r['password']);
            if (password_verify($password, $r['password'])) {
                session_start();

                $_SESSION['client']['id'] = $r['id_client'];
                $_SESSION['client']['id_admin'] = $r['id_admin'];
                
                echo '<script>window.location.href = "index.php"</script>';
                 client::$errorMgs  = 'in';
            } else {
                client::$errorMgs = "<script>Swal.fire({icon: 'error',title: 'Oops...',text: 'error password!',})</script>";
            }
        } else {
            client::$errorMgs = "<script>Swal.fire({icon: 'error',title: 'Oops...',text: 'error email !',})</script>";
        }
    }
    // register 
    public static function AddClient($nom, $email, $password, $adress, $ville, $tele){
        // 
        require_once '../method/db.php';

        $nom = conn::test_input($nom);
        $email = conn::test_input($email);
        $password = conn::test_input($password);
        $adress = conn::test_input($adress);
        $ville = conn::test_input($ville);
        $tele = conn::test_input($tele);
        $pss = password_hash( $password , PASSWORD_DEFAULT);
        $sql1 = "SELECT `email` FROM `client` ";
        $r1 = conn::DB('marcana')->prepare($sql1);
        $r1->execute();
        $rslt = $r1->fetchAll();
        $valid = true;
        foreach($rslt as $a){
            if($a['email'] === $email){
                $valid = false;
                
            }
        }
        if($valid){

            $sql2 = "INSERT INTO `client`( `nom`, `email`, `password`, `adress`, `ville`, `tele`,`id_admin`) VALUES ('$nom','$email','$pss','$adress','$ville','$tele',1)";
            $r2 = conn::DB('marcana')->prepare($sql2);
            $r2->execute();
            client::$errorMgs = "<script>Swal.fire('Good job!','use was added!','success')</script>";

        }else{
            client::$errorMgs = "<script>Swal.fire({icon: 'error',title: 'Oops...',text: 'email exist!',})</script>";
        }


    }
    public static function getClientInfo($id_clinet)
    {
        require_once 'db.php';

        $sql = "SELECT * FROM `client` WHERE `id_client` = '$id_clinet'";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        if ($r->rowCount() > 0) {
            return $r->fetchAll();
        } else {
            return null;
        }
    }
    public static function updateClientPassword($id_client,$pss)
    {
        require_once 'db.php';
        $pss = conn::test_input($pss);
        try {

            $sql = "UPDATE `client` SET `password` = '$pss'  WHERE `id_client` = '$id_client' ";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    public static function updateClientInfo($id_client,$name,$email,$address,$ville,$tele)
    {
        require_once 'db.php';
        $id_client = conn::test_input($id_client);
        $name = conn::test_input($name);
        $email = conn::test_input($email);
        $address = conn::test_input($address);
        $ville = conn::test_input($ville);
        $tele = conn::test_input($tele);
        try {

            $sql = "UPDATE `client` SET `nom`='$name',`email`='$email',`adress`='$address',`ville`='$ville',`tele`='$tele'  WHERE `id_client` = '$id_client' ";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}