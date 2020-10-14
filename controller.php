<?php
require_once 'portofolio.php';
 //recupere tous les name en POST
 extract($_POST);
 
if(isset($submit)){
    $ok = ajoutClient($nomcomplet, $sujet, $email, $message); 

    echo '<meta http-equiv="refresh" content="0;URL=mypage.html">';
}

if(isset($subconf)){
    $ok = confirmer($subconf);
    echo '<meta http-equiv="refresh" content="0;URL=index.html">';
}
?>