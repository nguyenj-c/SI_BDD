# SI_BDD
---

Groupe :
Khalil Mohamed - Negre Florian - Nguyen Jean Christophe - Tan Maxime

---

## Authentification VM

Voila les authentification pour se connecter a la machine virtuelle

````
Login : root

Mot de passe : Admin1234.
````
---

## Conseils
Dans la VM, dans le chemin cd ~/SI_BDD se trouve notre projet GitHub contenant les dossiers document qui sont les differents livrable fourni tout le long.
Puis dans horse_sim, il y a le projet laravel avec notre interface admin.

Il est conseiller de prendre ce dossier est de le télécharger sur la machine locale pour lancer l'application car la VM ne possédant pas la derniere version de PHP et docker il est devenue compliquée de le faire tourner.

( Connexion FTP conseillé afin de télécharger le dossier SI_BDD )
Une installation de PHP 8.1 et docker a déja été testé mais quand on a éssayé de se connecter à Adminer il y a eu des erreurs car Adminer dû aux changelent malgré le fait qu'on est changé la configuration.

Pour télécharger les extensions PHP 

```make init ```

Puis pour télécharger les dépendances

```make install ```

Et enfin pour lancer le site avec docker

```make up ```

## Lien du site 

Application :

http://localhost/

Pour se connecter a l'interface d'admin
````
Email : admin@admin.fr

Mot de passe : admin
````
http://localhost/admin/dashboard