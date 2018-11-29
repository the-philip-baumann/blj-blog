<?php
    include 'models/comment.model.php';
?>
<div class="wrapper">
        <form action="index.php?page=comment" method="POST">
            <fieldset>
                <legend class="form-legend">Kommentiere</legend>

                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input class="form-control" type="text" id="username" name="username" placeholder="Max Mustermann">
                </div>

                <div class="form-group">
                    <label for="note" class="form-label">Ihr Beitrag</label>
                    <textarea name="blog" id="blog" rows="10" class="form-control"></textarea>
                </div>

                </fieldset>
      
                <div class="form-actions">
                    <input class="btn btn-primary" type="submit" value="Beitrag kommentieren" name="kommentieren">
                    <a href="index.php?" class="btn"> Kommentar Abbrechen</a>
                </div>
                

        </form>
    </div>