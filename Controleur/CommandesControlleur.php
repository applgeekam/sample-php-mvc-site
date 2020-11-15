<?php

require_once 'Controleur/AppController.php';
require_once 'Modele/Commandes.php';
require_once 'Vue/Vue.php';

class CommandesControlleur extends AppController {


    private $cmd;

    public function __construct() {
        $this->cmd = new Commandes();
    }

    // Affiche les détails sur un billet
    public function save($datas) {
        $this->cmd->insert($datas);
    }
}

