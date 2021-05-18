<?php 
// session_start();
class admin{
    public  static  $errorMgs = [];
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
            if (password_verify($password, $r['password'])) {

                $_SESSION['admin']['id'] = $r['id_admin'];
                
                echo '<script>window.location.href = "index.php?p=dashboard"</script>';
            } else {
                var_dump($r);
                admin::$errorMgs = 'mot de passe incorrect';
            }
        } else {
            admin::$errorMgs = 'e-mail erroné';
        }
    }
    // ajouter une categories

    public static function Addcategories($nom){
        require_once 'db.php';
        $cat_nom = conn::test_input($nom);
        $sql = "INSERT INTO `categories`( `nom`, `id_admin`) VALUES ('$cat_nom',1)";
        $r = Conn::DB('marcana')->prepare($sql);
        $r->execute();
        var_dump($r);
    }
    public static function GetAllCategory(){
        require_once 'db.php';
        $sql = "SELECT * from categories";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        return $r->fetchAll();

    }
    

} 