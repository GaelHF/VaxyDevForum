<?php
$bdd = new PDO('mysql:host=localhost;dbname=vaxydev;charset=utf8;', 'root', '');
$recupPublication = $bdd->query('SELECT * FROM publications');
while($publication = $recupPublication->fetch()){
    ?>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" id="<?= $publication['titre']?>_titre"> <?= $publication['titre']?></h5>
                <p class="card-text" id="<?= $publication['pseudo']?>_pseudo"><i class="bi bi-person-circle"></i> <?= $publication['pseudo']?></p>
                <button type="button" class="btn btn-primary" id="<?= $publication['id']?>"><i class="bi bi-code-slash"></i> Ouvrir</button>
            </div>
        </div>
    </div>
    <br>
    <?php
}
?>