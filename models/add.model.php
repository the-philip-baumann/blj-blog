<?php
                    $user = 'root';
                    $pw = '';
                    $db = new PDO('mysql:host=localhost;dbname=BlogDB', $user, $pw);
                    

                    if(isset($_POST['speichern']))
                    {
                        $username = $_POST['username'] ?? '';
                        $input = $_POST['blog'] ?? '';
                        $title = $_POST['title'] ?? '';
                        $image = $_POST['image-url'] ?? '';
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