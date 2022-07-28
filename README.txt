- Afin d'accéder au site, il faut accéder au fichier "accueil.php" présent dans le dossier "pages".
Sous Windows avec XAMMP, il faut entrer "http://localhost/Projet/Pages/accueil.php" dans le navigateur après avoir placé les fichiers dans le dossier "htdocs/Projet" présent dans le dossier d'installation de xampp.

- Pour remettre à zéro le login/signin et les commentaires, dans "base_de_donnees", il y a un dossier "empty_files", il suffit de 
copier les fichiers présents dans ce dossier puis de les coller dans le dossier précédent, afin de remettre réellement les fichiers à zéro.
La suppression d'un message ou des informations utilisateurs directement depuis le fichier texte pourrait entrainer des erreurs 
lors de la décomposition des informations.

- les images présentes dans les commentaires sont directement récupérées grâce à leur URL, connexion Internet requise pour les voir.

- Quand j'écris un commentaire, j'ai fais en sorte de faire recharger la page car le message s'écrivait, mais ne s'affichait pas de suite.
Si je rechargeait la page avec le bouton, ça m'écrivait plusieurs fois le même message dans le fichier texte.
Problème résolu sur Google Chrome et sur Firefox.

- le signin marche, mais le login ne marche pas : connexion échouée dans tous les cas, même si le mail et le mot de passe sont corrects.
Si fonctionnel, utilisation de $_SESSION pour conserver les infos d'une page à l'autre.

- la barre de recherche ne marche pas, je n'ai pas réussi à l'implémenter, elle est donc en "décoration" sur le site.