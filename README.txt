- Afin d'acc?der au site, il faut acc?der au fichier "accueil.php" pr?sent dans le dossier "pages".
Sous Windows avec XAMMP, il faut entrer "http://localhost/Projet/Pages/accueil.php" dans le navigateur apr?s avoir plac? les fichiers dans le dossier "htdocs/Projet" pr?sent dans le dossier d'installation de xampp.

- Pour remettre ? z?ro le login/signin et les commentaires, dans "base_de_donnees", il y a un dossier "empty_files", il suffit de 
copier les fichiers pr?sents dans ce dossier puis de les coller dans le dossier pr?c?dent, afin de remettre r?ellement les fichiers ? z?ro.
La suppression d'un message ou des informations utilisateurs directement depuis le fichier texte pourrait entrainer des erreurs 
lors de la d?composition des informations.

- les images pr?sentes dans les commentaires sont directement r?cup?r?es gr?ce ? leur URL, connexion Internet requise pour les voir.

- Quand j'?cris un commentaire, j'ai fais en sorte de faire recharger la page car le message s'?crivait, mais ne s'affichait pas de suite.
Si je rechargeait la page avec le bouton, ?a m'?crivait plusieurs fois le m?me message dans le fichier texte.
Probl?me r?solu sur Google Chrome et sur Firefox.

- le signin marche, mais le login ne marche pas : connexion ?chou?e dans tous les cas, m?me si le mail et le mot de passe sont corrects.
Si fonctionnel, utilisation de $_SESSION pour conserver les infos d'une page ? l'autre.

- la barre de recherche ne marche pas, je n'ai pas r?ussi ? l'impl?menter, elle est donc en "d?coration" sur le site.