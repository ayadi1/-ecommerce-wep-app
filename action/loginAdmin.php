<?php 
if(isset($_POST)){
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        require_once '/wamp64/www/marcana/method/db.php';
        $email = conn::test_input($_POST['email']);
        $password = conn::test_input($_POST['password']);
        require_once '/wamp64/www/marcana/method/admin.php';
        admin::login($email,$password);
        echo admin::$errorMgs; 

    }
}