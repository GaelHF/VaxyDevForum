<?php

$bdd = new PDO('mysql:host=localhost;dbname=vaxydev;charset=utf8;', 'root', '');
if(isset($_POST['valider'])){
   if(!empty($_POST['pseudo']) AND !empty($_POST['titre'])){
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $titre = nl2br($_POST['titre']);

    $insererPost = $bdd->prepare('INSERT INTO publications(pseudo, titre) VALUES(?, ?)');
    $insererPost->execute(array($pseudo,  $titre));
    $insererInfos = $bdd->prepare('INSERT INTO infos(supp) VALUES(?)');
    $insererInfos->execute(array("Une nouvelle table a ete cree"));
    header("Location: posts.php");
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vaxy Dev Blog</title>
        <!-- Import BootStrap API -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="icon" type="image/x-icon" href="../assets/Logo.png">
      </head>
    <body>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Vaxy Dev Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./home.html"><i class="bi bi-house-fill"></i> Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./posts.php"><i class="bi bi-stickies-fill"></i> Publications</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="./posts_help.html"><i class="bi bi-question-lg"></i> Demander de l'aide</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled"><i class="bi bi-cart-fill"></i> Commandes [Bientôt]</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Navigation Bar -->

          <!-- User -->
          <br>

          <!--Messages-->
          <form method="post" action="">
            <div class="input-group flex-nowrap"  style="width: auto; margin-left: 1rem; margin-right: 1rem;">
              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-person-circle"></i></span>
              <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="pseudo">
            </div>
            <br>
            <div class="input-group mb-3" style="width: auto; margin-left: 1rem; margin-right: 1rem;">
              <span class="input-group-text" id="addon-wrapping"><i class="bi bi-chat-dots-fill"></i></span>
              <input type="text" class="form-control" placeholder="Titre" aria-label="Username" aria-describedby="addon-wrapping" name="titre">
            </div>
            <br>
            <input class="btn btn-outline-primary" type="submit" id="button-addon2" placeholder="Envoyer" style="margin-left: 56rem;" name="valider">
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top"></div>
          </form>
          <!--Messages-->
        </body>
</html>