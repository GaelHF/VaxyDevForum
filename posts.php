<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vaxy Dev Blog</title>
        <!-- Import BootStrap API -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <link rel="icon" type="image/x-icon" href="../assets/Logo.png">
      </head>
    <body>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" id="nav">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Vaxy Dev Blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./home.php"><i class="bi bi-house-fill"></i> Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href=""><i class="bi bi-stickies-fill"></i> Publications</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./posts_help.php"><i class="bi bi-question-lg"></i> Demander de l'aide</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled"><i class="bi bi-cart-fill"></i> Commandes [Bientôt]</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <div class="p-3 mb-2 bg-dark">
            <!-- Navigation Bar -->
            <!-- Les articles -->
            <section class="p-3 mb-2 bg-dark text-white" id="publications">
            </section>
          </div>
          <!-- Footer -->
          <div class="container, p-3 mb-2 bg-white text white">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
              <div class="col-md-4 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2023 Vaxy Dev | Copyright, All rights reserved</span>
              </div>
              <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-body-secondary" href="https://youtube.com/@VaxyDev"><i class="bi bi-youtube"></i> </a></li>
                <li class="ms-3"><a class="text-body-secondary" href="https://twitter.com/gael_hf01"><i class="bi bi-twitter"></i></a></li>
                <li class="ms-3"><a class="text-body-secondary" href="https://instagram.com/gael___hf"><i class="bi bi-instagram"></i></a></li>
              </ul>
            </footer>
          </div>
        </body>
      <script>
        $('#publications').load('loadPosts.php');
        $(document).on('click','button',function(){
            var buttonid = this.id;
            var varpseudo = buttonid + "_pseudo";
            var vartitre = buttonid + "_titre";
            var pseudo = $(`#${varpseudo}`).text();
            var titre = $(`#${vartitre}`).text();
          });
      </script>
</html>