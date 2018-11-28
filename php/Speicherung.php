<?php
    $user = 'root';
    $pw = '';
    $db = new PDO('mysql:host=localhost;dbname=BlogDB', $user, $pw);
    

    if(isset($_POST['speichern']))
    {
        $username = $_POST['username'] ?? "";
        $input = $_POST['blog'] ?? "";
        $title = $_POST['title'] ?? "";
        $fehlerListe = [];
        $fehlerListeLength;
        $i;



        if($username === "" || $username > 25){
            $fehlerListe = ["$username ist nich zulässig"];
        }
        if($title ==="" || $title > 100){
            $fehlerListe = ["$title ist nicht zulässig"];
        }
        if($input === ""){
            $fehlerListe = ["Ihr Beitrag darf nicht leer sein."];
        }
    
        $fehlerListeLength = sizeof($fehlerListe);

        if($fehlerListe === 0){
            $stmt = $db->prepare("INSERT INTO `posts` (created_by, post_text, post_title) VALUES(:created_by, :post_text, :post_title) ");
            $stmt->execute([':created_by' => $username, ':post_text' => $input, ':post_title' => $title]);
            
            header("location: /../Beitraege.php");
        }else{
            for($i = 0; $i < $fehlerListeLength; $i++){
                echo "$fehlerListe[$i]";
            }

        }
        

    }

?>