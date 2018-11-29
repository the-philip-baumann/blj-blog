<?php

$user = 'root';
$pw = '';
$db = new PDO('mysql:host=localhost;dbname=BlogDB', $user, $pw);


if(isset($_POST['speichern']))
{
    $username = $_POST['username'] ?? '';
    $kommentar = $_POST['blog'] ?? '';
    $fehlerListe = [];
    $fehlerListeLength;
    $i;



    if($username === ""){
        $fehlerListe[] = " Bitte Username eingeben.";
    }else if ($username > 25){
        $fehlerListe[] = "Username ist nicht zulässig.";
    }
    if($input === ""){
        $fehlerListe[] = "Ihr Beitrag darf nicht leer sein.";
    }

    $fehlerListeLength = sizeof($fehlerListe);

    if($fehlerListeLength === 0){

        
    }else{
        echo "<div class=error-box>";
        for($i = 0; $i < $fehlerListeLength; $i++){
            
            echo "<li class=list> $fehlerListe[$i] </li>";
            
        }
        echo "</div>";
    }
}






?>