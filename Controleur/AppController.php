<?php

abstract class AppController {
   
    // Recherche un paramètre dans un tableau
    public function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }
}
