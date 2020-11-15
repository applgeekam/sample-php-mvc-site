<?php

require_once 'Controleur/AppController.php';
require_once 'Modele/Articles.php';
require_once 'Vue/Vue.php';

class ArticlesControlleur extends AppController {

    private $article;

    public function __construct() {
        $this->article = new Articles();
    }

    // Affiche les détails sur un billet
    public function getAll() {
        $articles = $this->article->getArticles();
        $vue = new Vue("Home", 'Accueil');
        $vue->generer(array('articles' => $articles));
    }

    public function acheter($id)
    {

        $article = $this->article->getOne($id);
        $vue = new Vue("Commande", 'Accueil');
        $vue->generer(array('article' => $article));
    }
}

