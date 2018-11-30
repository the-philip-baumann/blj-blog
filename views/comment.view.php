<?php
    include 'models/comment.model.php';
    include 'models/home.model.php';
?>
<div class="wrapper">
        <form action="index.php?page=comment" method="POST">
            <fieldset>
                <legend class="form-legend">Kommentiere</legend>

                <?php if(sizeof($fehlerListe) > 0): ?>
                <?php 
                echo "<div class=error-box>";
                ?>
                <?php foreach($fehlerListe as $fehler ): ?>
                <?php echo "<li class=list> $fehler </li>";
                ?>
                <?php endforeach; ?>
                <?php
                echo "</div>";
                ?>
                <?php endif; ?>

                <?php
                echo "$post_id";
                ?>

                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Max Mustermann">
                </div>

                <div class="form-group">
                    <label for="note" class="form-label">Kommentar</label>
                    <textarea name="comment" id="comment" rows="10" class="form-control"></textarea>
                </div>

                </fieldset>
      
                <div class="form-actions">
                    <input class="btn btn-primary" type="submit" value="Beitrag kommentieren" name="kommentieren">
                    <a href="index.php?" class="btn"> Kommentar Abbrechen</a>
                </div>
                

        </form>
    </div>