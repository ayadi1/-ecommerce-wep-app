<?php
class message
{
    public  static  $errorMgs = [];
    public static function sendMessage($email,$nom,$message)
    {
        try
        {
            require_once '../method/db.php';
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
    public static function getAllMessage()
    {
        require_once '../method/db.php';
        $sql = "SELECT * FROM `message_box`";
        $r = conn::DB('marcana')->prepare($sql);
        $r->execute();
        if($r->rowCount()> 0){
            return $r->fetchAll();
        }else{
            return null;
        }


    }
}
