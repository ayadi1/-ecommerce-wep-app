<?php 

class admin{
    public  static  $errorMgs = '';
    public  static function login($user_email, $user_password)
    {
        require_once '/wamp64/www/marcana/method/db.php';

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

            $r = conn::DB("marcana")->prepare("SELECT * from admin where email = '$email'");
            $r->execute();
        } catch (PDOException  $e) {
            echo  "<br>" . $e->getMessage();
        }

        if ($r->rowCount() > 0) {
            $r = $r->fetch();
            // var_dump($r['password']);
            session_start();
            if (password_verify($password, $r['password'])) {

                $_SESSION['admin']['id'] = $r['id_admin'];
                
                echo '<script>window.location.href = "index.php?p=dashboard"</script>';
            } else {
                admin::$errorMgs = "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'email or password wrong!' })</script>";
            }
        } else {
            admin::$errorMgs = "<script>Swal.fire({   icon: 'error',   title: 'Oops...',   text: 'email or password wrong!' })</script>";
        }
    }
    // ajouter une categories

    public static function Addcategories($nom){
        require_once 'db.php';
        $cat_nom = conn::test_input($nom);
        $sql = "INSERT INTO `categories`( `nom`, `id_admin`) VALUES ('$cat_nom',1)";
        $r = Conn::DB('marcana')->prepare($sql);
        $r->execute();
    }
    public static function GetAllCategory(){
        require_once 'db.php';
        $sql = "SELECT * from categories";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        return $r->fetchAll();

    }
    public static function GetCategoryById($id_category)
    {
        require_once 'db.php';
        $sql = "SELECT * FROM `categories` WHERE `id_categorie` = '$id_category'";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        if($r->rowCount() >0){
            return $r->fetchAll();
        }else{
            return null;
        }
    }
    public static function getAdmenInfo()
    {
        require_once 'db.php';

        $sql = "SELECT * FROM `admin` WHERE `id_admin` = 1";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        if ($r->rowCount() > 0) {
            return $r->fetchAll();
        } else {
            return null;
        }
    }
    public static function updateAdminInfo($name,$email)
    {
        require_once 'db.php';
        $name = conn::test_input($name);
        $email = conn::test_input($email);
        try{

            $sql = "UPDATE `admin` SET `nom`= '$name',`email`= '$email' WHERE `id_admin` = 1";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    public static function updateAdminPassword($pss)
    {
        require_once 'db.php';
        $pss = conn::test_input($pss);
        try {

            $sql = "UPDATE `admin` SET `password` = '$pss'  WHERE `id_admin` = 1";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    

} 