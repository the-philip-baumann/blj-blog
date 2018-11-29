<?php
    include 'models/add.model.php';
?>
<div class="wrapper">
        <form action="index.php?page=add" method="post">
            <fieldset>
                <legend class="form-legend">Philips insane Blog</legend>

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
                    <a href="index.php" class="btn">Beitrag Abbrechen</a>
                </div>
                

        </form>
    </div>