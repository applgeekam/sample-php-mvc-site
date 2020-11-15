<?php


require_once 'Controleur/ArticlesControlleur.php';
require_once 'Controleur/CommandesControlleur.php';
require_once 'Vue/Vue.php';
class Routeur {

    private $ctrlArt;
    private $ctrlCmd;


    public function __construct() {

        $this->ctrlArt = new ArticlesControlleur();
        $this->ctrlCmd = new CommandesControlleur();
    }



    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            $this->resolveLink();
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }


    private function resolveLink()
    {
        if (isset($_GET['p'])) {
            $route = explode('.', $_GET['p'])[0];
            $this->route($route);
        }
        else {  
            // aucune action définie : affichage de l'accueil
            $this->ctrlArt->getAll();
        }
    }

    private function route($p)
    {
        if ($p == 'commande') {
            $this->ctrlArt->acheter($_GET['id']);
        }
        else if ($p == 'payer') {
            $datas['id_art'] = $_POST['id_art'];
            $datas['qte'] = $_POST['qte'];
            $datas['adr'] = $_POST['adr'];
            $this->ctrlCmd->save($datas);
            $this->redirectTo('/');
        }
        else if ($p == 'migrate') {
            // Pour creer les tables dans la db
            require_once 'BD/Migration.php';
            die();
        }
        else if ($p == 'seed') {
            // Pour inserer les donnes templates dans la db
            require_once 'BD/Factory.php';
            die();
        }
        else
            // Gerer l'affichage de la page 404
            throw new Exception("Action non valide");
    }



    
    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur", 'Errors');
        $vue->generer(array('msgErreur' => $msgErreur));
    }


    private function redirectTo($url)
    {
        header("Location: $url");
    }
}
