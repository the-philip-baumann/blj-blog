
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
    
    $stmt = $db->prepare('SELECT * FROM `posts`');
    $stmt->execute();
    $allPostsTable= $stmt->fetchAll();
?>

