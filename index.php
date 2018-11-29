<?php 
    $page = $_GET['page'] ?? 'home';

    // pages-Whitelist
    $pages = [
        'home',
        'add', 
        'comment', 
        'rate',
        '404'
    ];
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Blog</title>
</head>
<body>
    <?php 
        if (!in_array($page, $pages)) {
            include 'views/404.view.php';
        }
        else { 
            include 'views/' . $page . '.view.php';
        }
    ?>
</body>
</html>