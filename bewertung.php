<?php
$user = 'root';
$pw = '';
$db = new PDO('mysql:host=localhost;dbname=BlogDB', $user, $pw);
$likesCounter = $db->prepare('SELECT * FROM `posts`');
$likesCounter = 1000;




$sql = ("UPDATE posts SET likes=$likesCounter WHERE id=40 ");
$statement = $db->prepare($sql);
$statement = $db->execute();


                            
header("location: /../blog/index.php");
?>