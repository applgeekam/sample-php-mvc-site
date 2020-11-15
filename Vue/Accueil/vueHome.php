
    <div class="header" id="acceuil">
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
                        <li class="nav-item active">
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
        <div class="suite">
            <div class="text">
                <h1>Nature
                    <br>Emoi,
                    <br>meilleur que
                    <br>le chocolat.
                    <br>
                </h1>
            </div>
            <div class="to-scroll">
                <a href="#vente"><button type="button" class="btn btn-link">Scroll <i class="scroll-icon fas fa-angle-down">
                </i></button></a>
            </div>
        </div>
    </div>

    <div class="main">
        <main>
            <section class="container vente" id="vente">
                <div class="card-group">
                    <div class="card">

                        <div class="card-body">
                            <i class="delivery-icon fas fa-store" style="font-size: 80px; margin: 10px 0;" color="green"> </i>
                            <p class="card-text">Nos Magazins à votre service</p>

                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            <i class="delivery-icon fas fa-people-carry" style="font-size: 80px; margin: 10px 0;" color="green"> </i>
                            <p class="card-text">Retrait en magazin sans contact</p>

                        </div>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <i class="delivery-icon fas fa-truck" style="font-size: 80px; margin: 10px 0;" color="green"> </i>
                            <p class="card-text">Livraison à domicile sans contact</p>

                        </div>
                    </div>
                </div>
            </section>
        </main>
        <main>
            <section class="container article">
                <h2>Nos meilleurs ventes</h2>
                <div class="row">
                <?php foreach ($articles as $k =>  $article):    
                    ?>
                     <?php if ($k < 4):?>
                        <div class="card col-md-3">
                            <img src="<?= $article['path'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                            <p class="card-text prix">
                                <span><?= $article['title'] ?></span>
                                <span><?= $article['prix'] ?></span>
                            
                            </p>
                            <a href="/?p=commande.php&id=<?= $article['id'] ?>"><button type="button" class="btn btn-info">Acheter</button></a>
                            </div>
                        </div>
                    <?php else: break; endif?>                        
                <?php endforeach; ?>
                </div>
            </section>

            <section class="container article" id="plante">
            <h2>Nos plantes</h2>
                <div class="row">
                <?php foreach ($articles as $article):    
                    ?>
                    <div class="card col-md-3">
                        <img src="<?= $article['path'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text prix">
                                <span><?= $article['title'] ?></span>
                                <span><?= $article['prix'] ?></span>
                            
                            </p>
                            <a href="/?p=commande.php&id=<?= $article['id'] ?>"><button type="button" class="btn btn-info">Acheter</button></a>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </section>
        </main>

    </div>