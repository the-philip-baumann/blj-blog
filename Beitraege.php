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
            <fieldset>
                <legend class="form-legend">Beiträge ansehen</legend>
                <div class="form-group">
                    <label for="note" class="form-label">Ihr Beitrag</label>
                    <textarea name="blog" id="blog" rows="7" class="form-control"></textarea>
                </div>   
            </fieldset>
<?php
            $user = 'root';
            $pw = '';
            $db = new PDO('mysql:host=localhost;dbname=BlogDB', $user, $pw);


            $stmt = $db->prepare('SELECT * FROM `posts`');
            $stmt->execute();
            foreach($stmt as $output){

?>        

                <div class="form-actions">
                    <h3><?= htmlspecialchars($output['created_by'], ENT_QUOTES, "UTF-8"); ?></h1>
                    <h4><?= htmlspecialchars($output['post_title'], ENT_QUOTES, "UTF-8"); ?></h1>
                    <p><?= htmlspecialchars($output['post_text'], ENT_QUOTES, "UTF-8"); ?></p>
                    <p><?= htmlspecialchars($output['created_at'], ENT_QUOTES, "UTF-8"); ?></p> 
                </div>
<?php
            }

?>

        </div>
    </body>
</html>