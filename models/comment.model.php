<?php


$user = 'root';
$pw = '';
$db = new PDO('mysql:host=localhost;dbname=BlogDB', $user, $pw);

$fehlerListe = [];
$fehlerListeLength;


if(isset($_POST['btn-comment'])){
    $post_id = $_POST['id'] ?? '';
    }

if(isset($_POST['kommentieren']))
{
    $username = $_POST['username'] ?? '';
    $kommentar = $_POST['blog'] ?? '';




    if($username === ""){
        $fehlerListe[] = " Bitte Username eingeben.";
    }else if ($username > 25){
        $fehlerListe[] = "Username ist nicht zulässig.";
    }
    if($kommentar === ""){
        $fehlerListe[] = "Ihr Kommentar darf nicht leer sein.";
    }

    $fehlerListeLength = sizeof($fehlerListe);

    if($fehlerListeLength === 0){
        
    }

}



?>