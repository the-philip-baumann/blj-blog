<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="wrapper">
        <form action="blogerfassung.php" method="post">

            <fieldset>
                <legend class="form-legend">Philips insane Blog</legend>



<?php
                    $user = 'root';
                    $pw = '';
                    $db = new PDO('mysql:host=localhost;dbname=BlogDB', $user, $pw);
                    

                    if(isset($_POST['speichern']))
                    {
                        $username = $_POST['username'] ?? '';
                        $input = $_POST['blog'] ?? '';
                        $title = $_POST['title'] ?? '';
                        $image = $_POST['email-url'] ?? '';
                        $fehlerListe = [];
                        $fehlerListeLength;
                        $i;



                        if($username === ""){
                            $fehlerListe[] = " Bitte Username eingeben.";
                        }else if ($username > 25){
                            $fehlerListe[] = "Username ist nicht zulässig.";
                        }

                        if($title === ""){
                            $fehlerListe[] = "Bitte Titel eingeben.";
                        }else if ($title  > 25){
                            $fehlerListe[] = "Titel ist nicht zulässig.";
                        }

                        if($input === ""){
                            $fehlerListe[] = "Ihr Beitrag darf nicht leer sein.";
                        }
                    
                        $fehlerListeLength = sizeof($fehlerListe);

                        if($fehlerListeLength === 0){
                            $stmt = $db->prepare("INSERT INTO `posts` (created_by, post_text, post_title, image_url) VALUES(:created_by, :post_text, :post_title, :image_url) ");
                            $stmt->execute([':created_by' => $username, ':post_text' => $input, ':post_title' => $title, ':image_url' => $image]);
                            
                            header("location: /../blog/index.php");
                        }else{
                            echo "<div class=error-box>";
                            for($i = 0; $i < $fehlerListeLength; $i++){
                                
                                echo "<li class=list> $fehlerListe[$i] </li>";
                                
                            }
                            echo "</div>";
                        }

                    }

?>

                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Max Mustermann">
                </div>

                <div class="form-group">
                    <label class="form-label" for="title">Titel</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>

                <div class="form-group">
                    <label for="note" class="form-label">Ihr Beitrag</label>
                    <textarea name="blog" id="blog" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="image-url">Füge hier ein Link zum gewünschten Bild ein.</label>
                    <input class="form-control" type="text" id="image-url" name="image-url">
                </div>

                </fieldset>
      
                <div class="form-actions">
                    <input class="btn btn-primary" type="submit" value="Beitrag veröffentlichen" name="speichern">
                    <a href="http://www.google.com" class="btn">Beitrag Abbrechen</a>
                </div>
                

        </form>
    </div>
</body>
</html>