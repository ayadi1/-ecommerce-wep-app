<?php
class message
{
    public  static  $errorMgs = [];
    public static function sendMessage($email,$nom,$message){
        try{
            require_once 'functions/db.php';
            $email = conn::test_input($email);
            $nom = conn::test_input($nom);
            $message = conn::test_input($message);
            $datetime = date("Y-m-d H:i:s");
            $sql = "INSERT INTO `message_box`( `mesage`, `email`, `nom`, `date_send`) VALUES ('$message','$email','$nom','$datetime')";
            $r = conn::DB('marcana')->prepare($sql);
            $r->execute();

        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
}
