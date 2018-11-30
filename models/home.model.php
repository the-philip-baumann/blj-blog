
<?php

    $ipOtherBlog = '';
    $pathOtherBlog = '';

    if(isset($_POST['btn-sichern'])){
       
        // db noah 
        $dbuser = 'guest';
        $dbpw = 'blj12345';
        $db = new PDO('mysql:host=10.20.16.102;dbname=blogdb', $dbuser, $dbpw);
    
        $ip = $_POST['IPv4'] ?? '';
        //echo $ip;

        $stmt = $db->prepare('SELECT * FROM `andereblogs` WHERE id = :id');
        $stmt->execute([':id' => $ip]);
        $table = $stmt->fetchAll();
        
        $ipOtherBlog = $table[0]['ip'];
        $pathOtherBlog = $table[0]['pfad'];
    }
    
    // db lokal 
    $dbuser = 'root';
    $dbpw = '';
    $db = new PDO('mysql:host=localhost;dbname=BlogDB', $dbuser, $dbpw);
    
    $stmt = $db->prepare('SELECT * FROM `posts` order by created_at desc');
    $stmt->execute();
    $allPostsTable= $stmt->fetchAll();

    $thumbsUP = trim($_POST['thumbsUP']??'');
    $thumpsDown = trim($_POST['thumbsDown']??'');
    $id = trim($_POST['id']?? '');
    $thumbsUP++;
    $thumpsDown++;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['upcount'])){
            $count = $db->exec("UPDATE `posts` SET up_votes = $thumbsUP WHERE id = $id");
        }

        else if(isset($_POST['downcount'])){
            $count = $db->exec("UPDATE `posts` SET down_votes = $thumbsDown WHERE id = $id");
        }
        header("Refresh:0; url=index.php?page=home");
    }




?>

