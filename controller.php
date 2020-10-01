<?php

use function PHPSTORM_META\map;

require_once 'portofolio.php';
 //recupere tous les name en POST
 extract($_POST);
if(isset($submit)){
    $ok = ajoutClient($nomcomplet, $sujet, $email, $message);    
}

?>