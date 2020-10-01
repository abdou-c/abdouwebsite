<?php

function dbConnection(){
    $user = "root";
    $host = "localhost";
    $passwd = "";
    $dbName = 'monportofolio';

    $dsn = "mysql:host=$host;dbname=$dbName";


    try {
        $db = new PDO($dsn, $user, $passwd);
    } catch (PDOException $ex) {
        die("erreur:" .$ex->getMessage());
    }
    // echo 'la connexion passe';
    return $db;
    
}


 function ajoutClient($nomcomplet, $sujet, $email, $message){
     $sql = "INSERT INTO `personne`(`nomcomplet`, `sujet`, `message`, `email`)
                  VALUES('$nomcomplet','$sujet', '$message', '$email')
             ";
     $ok = dbConnection();
    //  var_dump($sql);
    // die;
   
   return $ok->exec($sql);
    
 }

?>