<h1>P5 - OpenClassRooms</h1>
<hr>
<h2>Informations</h2><br>

Les aggrégations ne sont volontairement pas indiquées sur le diagramme de classe UML de l'application pour gagner en lisibilité. Celui-ci me sert principalement d'aide visuel et n'est pas forcemment complet.

La manipulation des données stockés (Hydratation : Entité/Manager) a été effectué en suivant le cours de Victor Thuillier.

Le thème Bootstrap utilisé a été crée par Start Bootstrap. <a href="https://startbootstrap.com/themes/agency/" target="_blank">Plus d'informations</a>

<h2>Installation</h2><br>
<ul>
  <li><b>Etape 1 :</b> Transférer les fichiers dans le dossier racine de votre serveur web (en général "www/").</li>
  <li><b>Etape 2 :</b> Créer une base données sur votre SGDB (MySQL) et importer le fichier DB/dbblog.sql pour charger les tables du blog.</li>
  <li><b>Etape 3 :</b> Dans le fichier Framework/Model.php, modifiez les paramètres suivants :</li>
</ul>
<ul>
  <li>host : 'mysql:host=AdresseDB;</li>
  <li>dbname: dbname=NomDB; (mom par défaut = dbblog);</li>
  <li>login : 'utilisateurDB';</li>
  <li>password : passwordDB';</li>
</ul>
<b>Important</b>
 Veillez à bien remplir tout les champs avec vos informations de la même façon que celle fournit dans l'exemple !

<h2>Paramétrage du formulaire de contact</h2><br>
<ul>
  <li>email = 'votreEmailDeReception@gmail.com'</li><br>
  <li>noreply = 'noreply@votredomaine.com'</li><br>
  <li>domain = 'http://votredomaine.com/NomDuDossierRacine/'</li><br>
</ul>
Ne pas indiquer de NomDeDossierRacine/ si les fichiers se trouvent à la base de votre dossier web

Votre blog est désormais fonctionnel !<br>
<ul>
  <li>Vous pouvez créer un compte dans l'onglet "Connexion".</li><br>
  <li>Ensuite, cliquez sur <em>créer un compte !</em> en bas du formulaire de login.</li>
</ul>
Dans votre base de données et dans la table "user", modifier la colonne "role" de l'utilisateur que vous venez de créer et mettez y la valeur 2. 
Enregistrez la modification. Vous disposez désormais d'un compte administrateur qui vous permet de gérer votre blog via le menu "Administration"

Attention ! La protection de répertoires doit être réalisée sous Apache soit via httpd.conf ou soit via des fichiers .htaccess et .htpasswd
Veuillez à bien protéger le dossier Config/ ainsi que tout les autres dossiers contenant du code qui ne doit pas être accessible par l'utilisateur !
