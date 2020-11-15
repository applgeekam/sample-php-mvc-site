
    <div class="header">
        <!-- Just an image -->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container">
                <a class="navbar-brand logo" href="#">
                    <img src="Contenu/logo.png" alt="Le logo de Nature Emoi">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="/#acceuil">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#vente">Nos meilleurs ventes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#plante">Nos plantes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="">

          <div class="container card-cmd">
              <div class="row">
                <div class="col-md-6 img">
                    <img src="<?= $article['path'] ?>" alt="">
                </div>
                  <div class="col-md-6">
                    <div class="contact-clean" width="30%" height="30%">
                        <form method="post" action="/?p=payer.php">
                            <h2 class="text-center">Acheter <?= $article['title'] ?></h2>
                            <input type="number" name="id_art" hidden value="<?= $article['id'] ?>">
                            <div class="form-group"><input type="number" class="form-control" name="qte" placeholder="Quantite" /></div>
                            <div class="form-group"><input class="form-control" type="text" name="adr" placeholder="Adresse"></div>
                            <div class="form-group"><button class="btn btn-primary" type="submit">Envoyer </button></div>
                        </form>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </div>