- Verifier que les noms de fichiers correspondent aux nom de classe : OK
- Faire l'injection des dépendances dans tous les constructeurs des controllers : ok
- Pour tous les manager, faire l'injection du dbConnect : ok
- Vérifier l' utilité des controllers et ajuster : ok

- Déplace les fichiers inutiles dans un dossier oldSource à la racine du projet. Donc en dehors src. : ok
- Ne plus utiliser les superglobals $_GET, $_POST, $_FILES directement dans le code, il faut à la place utiliser la classe Request : ok
- Ne plus utiliser la superglobals $_SESSION directement dans le code, il faut à la place utiliser la classe Session : 
- Factorisés les templates dans mobilier deco, à première vu, ils ont peu de différences entre eux.
- Voir pour les autres templates


2e 

- Factorisés les templates dans mobilier deco, à première vu, ils ont peu de différences entre eux.
- Voir pour les autres templates


3

- Changer les href en Path
- utiliser les request dans les controllers

liste Request
$request->query->get('foo'); // $_GET

$request->request->get('bar', 'valeur par défaut si bar n'esiste pas'); // $_POST

$request->server->get('HTTP_HOST'); // $_SERVER

$request->files->get('foo'); // $_FILES


4
Modifier les tables dans heidi
faire le userRepository
terminer les find dans l'articleRepository
gerer les limit dans le findBy dans l'articleRepository
ranger les templates dans des dossiers correspondant
finir la homePage et article
creer un article dont le prix est 9,99 et doit bien afficher le prix

