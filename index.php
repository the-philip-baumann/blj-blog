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
        <form action="index.php" method="POST">
            <fieldset>
            <h6>Du bist auf der Suche nach anderen weniger interessanten Blogs, dann finde sie hier. </h3>
                <legend class="form-legend">Beiträge ansehen</legend>
                <select name="IPv4">
                    <optgroup label="Basislehrjahr Gang">
                    <option  value="1"> Nicks Webseite </option>
                    <option  value="2"> Leos Webseite </option>
                    <option  value="3"> Philips Webseite </option>
                    <option  value="4"> Daniels Webseite </option>
                    <option  value="5"> Colins Webseite </option>
                    <option  value="6"> Davids Webseite </option>
                    <option  value="7"> Samuels Webseite </option>
                    <option  value="7"> Noahs Webseite </option>

                </select>

            <div class="form-actions">
            <input class="btn btn-primary" type="submit" value="Sichern" name="wechseln">
            
            </div>
            </form>

            
<?php
            $dbuser = 'guest';
            $dbpw = 'blj12345';
            $dbconnection = new PDO('mysql:host=10.20.16.101;dbname=blogdb', $dbuser, $dbpw);

            if(isset($_POST['wechseln'])){
                $ip = $_POST['IPv4'] ?? '';
                echo $ip;

                $stmt = $dbconnection->prepare('SELECT * FROM `andereblogs` WHERE id = :id');
                $stmt->execute([':id' => $ip]);
                foreach($stmt as $output){
            
                
                
?>
  <a href="http://<?= htmlspecialchars($output['ip'], ENT_QUOTES, "UTF-8");?><?= htmlspecialchars($output['pfad'], ENT_QUOTES, "UTF-8"); ?>">Jetzt Zur Seite wechseln</a>
<?php   
                }
            }
            ?>
            
               <h3>Interessiert selber einen Block zu schreiben, dann tu dies hier.</h3> 
               <a href="blogerfassung.php"><h4>Jetzt Blog verfassen</h4></a>
                



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
                    <img class="blog-image" src="<?= htmlspecialchars($output['image_url'], ENT_QUOTES, "UTF-8"); ?>"alt="Bild zum Blog">
                    <p><?= htmlspecialchars($output['created_at'], ENT_QUOTES, "UTF-8"); ?></p>
                </div>

<?php
            }

?>

        </div>
    </body>
</html>