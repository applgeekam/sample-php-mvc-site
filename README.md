Ce projet n'a aucune dependance.

Pour l'utiliser, il faut :

- Lancer un server a la racine du projet 

    php -S localhost:3030

- Modifier les parametres de connections a la base de donnees dans le fichier Models (liens relatifs : Modele/Modele.php), au niveau de la methode getBdd de la classe.

- Lancer la migration des tables en allant a l'adresse suivante http://localhost:3030/?p=migrate.php dans le navigateur 

- Ensuite, envoyer des donnees template dans la db de la meme maniere : http://localhost:3030/?p=seed.php

- Aller afin a l'acceuil du site, avec http://localhost:3030


Merci !