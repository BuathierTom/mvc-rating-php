# TP PHP

Le projet « Rating » consiste à réaliser un site web permettant aux étudiants de l’IUT de donner un avis et une note aux différents modules qui compose leur formation. Le site sera organisé selon le modèle MVC. Les informations seront mémorisées dans une base de donnée Mysql ou PostgreSql au choix. La couche d’abstraction PDO garantira une indépendance au SGBD.
Les requêtes préparées seront privilégiées pour se prémunir des injections SQL.

Les bibliothèques « tags.lib.php » et « check.lib.php » des TP précédents seront réutilisées et enrichies. Un système d’authentification utilisant les sessions permettra de définir un rôle de modérateur qui pourra supprimer/modifier les commentaires indélicats.

### 1. Construction de l’aborescence de travail
Créez un dossier « rating » racine de votre application dans votre espace de publication. Ajoutez y les dossiers:
- Controllers
- Models
- Views
- css
- javascript
- images

### 2. Création du contrôleur principal
Créez le fichier « index.php » racine de votre site. Cette page devra vérifier l’existence d’une variable nommée « controller » transmise dans l’URL (GET). En cas d’échec, terminez prématurément le script avec un message d’erreur ( die() ). Vérifiez ensuite l’existence une page PHP dans le dossier « Controllers » au nom de cette variable (file_exists() ) et inclure ( require() ) le code correspondant dans votre page.

Si le fichier est inexistant, terminez avec un message d’erreur
A ce stade, l’appel de la page index provoque l’affichage de votre message d’erreur

### 3. Création du contrôleur de la page d’accueil
Créez une page « home.php» dans le dossier « Controllers ». Cette page se contente d’inclure la vue correspondante « Views/home.php ».

### 4. Création du gabarit
Récupérez le fichier « gabarit.php » et copiez le dans le dossier « Views ». De la même façon recopiez « tags.lib.php » dans ce dossier et « check.lib.php » dans le dossier « Controllers ». 

Modifez votre gabarit pour qu’il insère la feuille de style « default.css » dans le code html. 

Créez cette feuille de style dans le dossier «css ». Ajoutez y quelques éléments de syle.

De la même façon, prévoir l’ajout d’une feuille de style au nom du contrôleur si elle existe. L’existence d’une variable $title devra être vérifiée avant d’ajout un titre dans la barre de titre du
navigteur (balise <title>...</title>).

### 5. Création de la vue de la page d’accueil
Ajoutez un fichier « home.php » dans le dossier « Views ». Ce script se contente de renseigner deux variables « title » avec « Home Page » et « content » avec « Ceci est ma page d’accueil » avant d’inclure le gabarit.

A ce stade un appel correct de la page index : http://localhost/rating/index.php?controller=home devrait afficher correctement le titre et le contenu. Vérifiez le code source html dans le navigateur. Modifier le contenu pour créer un paragraphe ; utilisez ou créer pour cela la fonction « paragraphe » de votre bibliothèque « tags.lib.php »


### 6. Création d’une vue « erreur »
Commencez par créer un fichier « config.php » dans votre dossier « Views ». Ils servira à initialiser quelques variables de l’application :
- La variable $PROD booléen initialisé à False. Elle passera à True lors de la mise en
production du site. Elle servira à limiter les messages d’erreur sur un site en production.
- Le tableau $ERROR_MESS[]. Ce tableau contiendra des messages d’erreurs. L’index
représente le numéro d’erreur et la valeur le texte correspondant. Dans un premier temps
créez simplement l’index 0 : « Pas d’erreur ».
- La variable $ERROR contiendra le numéro d’erreur (0 par défaut).
- La variable $WEBMST contient l’email du gestionnaire du site.

Créez un script « error.php » dans le dossier « Views ». Ce script devra être appelé lorsqu’une erreur est rencontrée. Il servira alors à afficher proprement le numéro et le message d’erreur si le
site est en développement ou le numéro et un message indiquant de contacter le WebMaster pour un site en production.

### 7. Modification de la page d’index pour utiliser la vue erreur
Remplacez dans la page index la sortie avec « die » lorsque le contrôleur n’est pas trouvé par un nouveau numéro d’erreur appelez la vue « error » après avoir renseigné le message correspondant dans « config.php ». 

Ajoutez un classe « error » dans votre style par défaut de façon à enrichir le style d’affichage de la
cette vue.


## Installation

Lancer le programme avec votre serveur sur votre machine. Puis vous allez sur le localhost avec le controller :

```bash
  http://localhost:8000/index.php?controller=home
```

## Auteurs

- [@BuathierTom](https://github.com/BuathierTom)


