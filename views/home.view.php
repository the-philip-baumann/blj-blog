<?php include 'models/home.model.php' ?>

<div class="wrapper">
    <form action="index.php" method="POST">
        <fieldset>
            <legend class="form-legend">Beiträge ansehen</legend>
            <p>Du bist auf der Suche nach anderen weniger interessanten Blogs, dann finde sie hier. </p>
            <select name="IPv4">
                <optgroup label="Basislehrjahr Gang">
                <option  value="1"> Nicks Webseite </option>
                <option  value="2"> Leos Webseite </option>
                <option  value="3"> Philips Webseite </option>
                <option  value="4"> Daniels Webseite </option>
                <option  value="5"> Colins Webseite </option>
                <option  value="6"> Davids Webseite </option>
                <option  value="7"> Samuels Webseite </option>
                <option  value="9"> Noahs Webseite </option>
            </select>

            <div class="form-actions">
                <input class="btn btn-primary" type="submit" value="Sichern" name="btn-sichern">
            </div>
        </fieldset>
    </form>
    
    <?php if($ipOtherBlog != ''): ?> 
        <a href="http://<?= htmlspecialchars($ipOtherBlog, ENT_QUOTES, "UTF-8");?><?= htmlspecialchars($pathOtherBlog, ENT_QUOTES, "UTF-8"); ?>">Jetzt Zur Seite wechseln</a>
    <?php endif; ?>

    <h3>Interessiert selber einen Block zu schreiben, dann tu dies hier.</h3> 
    <a href="blogerfassung.php">
        <h4>Jetzt Blog verfassen</h4>
    </a>

    <?php foreach($allPostsTable as $row): ?>
        <div class="form-actions">
            <h3><?= htmlspecialchars($row['created_by'], ENT_QUOTES, "UTF-8"); ?></h1>
            <h4><?= htmlspecialchars($row['post_title'], ENT_QUOTES, "UTF-8"); ?></h1>
            <p><?= htmlspecialchars($row['post_text'], ENT_QUOTES, "UTF-8"); ?></p>
            <a href="bewertung.php"> 
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPlSURBVGhD7ZhLaBNBHMbrg6J48CT4AI96VbzoQfSgFwWFYhWqIMVqtlhboYq1LZ1Eqh6sraB48KhQMVILqbVNYl/YZrfZjQqtioJSRcG3Yl8pJjP+Zzst2+1skmm3IZH94EfCZJL5vsz8ZybJceTIkSNHiYQjnm1YdTdjzd0Kj0dZc/aJaKibaG4yBVZRNXspe0S60DIwHjUFieIIWsu6ZIeIinYaQ0yHiaA81iU7BDVxkRtERQWsS+aLELQYa+hD1gfBEfchXggKVj37WbfMFulHq+Fb/8oLQcFhzw7WNXNFBlEu1EYHL8AU+FntOtY9M0W83iUQoolnfgp4/RfrnrmC5XSTZ34myMu6Z6bAYAXf+Ewy+poCM1EEYJ5xE7+x4tlLwmiXESyjfThcU4bD7kK9DQ5S/PTiKvbxqatNCm/0FytbRKDvoe+FwcvgvEglhBD0iwFu0PNIN5mKApLiA4gIfkl5QjRPPtxqJ3hG7ALCSMxmcvldcgPPbCI6TvVGYL2P8ga3E3r9ZzaTK+BSSnhmE9F3PviNN7D9COxyAZe8h2c2Ef3utjh/YPvQNxAofmYzuYJF/Rt4ZhMRdrdxB7cD2DxisKQGIMgBZjE1efMHc8FczGw2EXYG+dt9lvy5c5j8uV2gP475JBwLVb6mmwmzmLr8LmWIZ9gKW4N0ntEDjLcUk3ioarp9cgv27GYWUxPUSSfPsBW2Ly0V8dtFrzRwLtziGbZiIWvEiND2SxWU5AqeYSvSFkTkQKQKuEIHeYatWOggen1o7utCVxSqoNS3mWfYCruCxHsryNiD42S0qYiMNB2bGPe5vsRDla3wK3MTsyam4AltJc+wFXYFmfCX6tvuyL1C2L3Koegn22FGfkKhr2f2xAR3ru880zxsW1qwW8V6zk0HMAJhrjFrYgKDitmwFekodgjiY9bE5JfkRrPh/ssD5PX9IaLWvZjRnpYgGqpk1sQEZ0mt0axyaYAMfxwlw58mURtepi0IzEYIh64uZ9bEFCiWC41BXja+mw5BedP83tYgWKkmE+2lesFTou2lv2HHasbhC3mkCy1ltsTVJinbjUFk84zU2zsj0Ucl7KJ4hEQfntSD0Xb4wdZD/x9jtsT12BVaZwxCUWiNeIdI2FQjSnX7uNmYKHG5Sp+RqQBGoD5OM1viIjlkEdyCx4yGregp73prHtxO4FS/y2zNTXALHuQZn43cC0sg4V+j8wFmpJZZmpvA4CWYlWBy5Ab8/MoKGLCRZ2Q+wGd+pn+EM0vpEwy8FbbLOpihFlgSwQT0Qt8PWKv5Ac9no9a8gtfrsVq7hn20I0eOHP0Xysn5B/M+uSLxQ5h4AAAAAElFTkSuQmCC" >
            </a>
            <a href="bewertung.php">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANgSURBVGhD7ZjLTxNRFMarISbGGI0L/QeIrgwqW18LHzGYGDVu0BB8RgVMMDGoILdtKMUYF0boQo0QRBNRSMAWNAg+IgU7U0RlJYkufOxQAyLl0Xs8MxxqKRex02k7DfNLvqRMT3u/b2bO4XYsJiYmJvMXkNhWLrFKLls9qLZZJVm7UF/w9YBQkvU9ysm9bAV9dQy4nGWWqoq2OYV1yoK48BOQraCnuMw+8leXl5IjjbicbourAuZSmsvZigv2iIzoITxBheRII/8ZZG21o19kQC9hkGvkSCMRQdbXV0NuuwfW3b89LcjOu44xkYFoFOy8AKOPzwB/fWnGe9hz2eRII2FBNjyogeZP/SFlhIXJulc+Y/FoNdJ8EgZrs2Go7hAEWgpCgTBEIwBbSI40EhYkt8MzLUjOU7euQYJdxRBoLYCAJ39SLfnfg90ldVy27waABeRII2FBlNtpKkQTSu8r8i+p0/AZSyNXGojoESVMTrsbMuqn90i8g6jysxPkSgMRQWZTIoLgeL9FrjSQ4CDcVwoTL4vE70nW4klTWkhwkIAnT51cw/VHYPz5udBx3LJ8jm2rkuAgEy+K4HfjcRhuOAa/Hh4dHWk+9S3oLW7gvWw1OdKIQXoE+2MCVUauNGCgZlfEfbb95CxKDBYEZFZDzqIkWUEkJjyOTX+dnEVJEoKMtRXC4B3cb7nzgHeXhI7jnmsM/PZMchYlyQjScRaDHFTHsBJo5NHpYNB78S2XbTvJlQYM0CN4O40rP9oSFMQhNKGnlEBxv7U21ZYPiBbXW3Fv9pU3nZ3KPy3R4voqzuNXqeN+62E8Y3ENw/1sHzmLksrydDSZOaeUOgQbshTPmtBELFIbXmJ21VOiwCDnRWYihdvyr7zHth18bFu4uGTbozz+QeM56t9+thnesOX09YkFjVSJzEcK90676CPGRHlYgGe0TmQ+XFjjoo8YF+hji/DKtIsCTAmDfKByYwNyxTI0+04UQpE6sjEwlRsbbNZ0vDJDoiCKuM++hkqND47PPFGISbGNVGZ8uPfqYjT8UxQEb70dVJYaoOEb4iC2LCpJDUC2HRAG8dm2UElqwLscq2aEkKw/eO+VJVSSOuC47fsbgvHYnucmEWXfhFehFadYE24w99JhExMTk3mJxfIHl0t5ATfl2rUAAAAASUVORK5CYII=">
            </a> 
            <p>
                <?= htmlspecialchars($row['created_at'], ENT_QUOTES, "UTF-8"); ?>
            </p>
            <?php if(htmlspecialchars($row['image_url'], ENT_QUOTES, "UTF-8") !==''): ?>
                <img class="blog-image" src="<?= htmlspecialchars($row['image_url'], ENT_QUOTES, "UTF-8"); ?>"alt="Bild zum Blog">
            <?php endif; ?>
        </div>
    <?php endforeach; ?>