
<?php 
session_start();

//inclure le fichier connection_aux_serveur.php pour établir une connexion
@include '../tables/conection_aux serveur.php';

//récupére submit
//récupére submit
if(isset($_POST['envoie'])){
    //on récupére envoie mail
    $username = $_POST['username'];
    //on récupére envoie code
    $code = $_POST['code'];

    // on vérifie si mail et code sont égaux à mail et mot de passe
    $selection="SELECT id_client,nom,code FROM Client WHERE nom=? && code=?";
    
    // on prépare la requête SQL
    $resultat = mysqli_prepare($conn, $selection);
    
    /* Lier les paramètres */
    mysqli_stmt_bind_param($resultat,'ss',$username, $code);

    /* Exécuter la requête */
    mysqli_stmt_execute($resultat);

    /* Stocker le résultat */
    mysqli_stmt_store_result($resultat);

    /* Récupérer les valeurs */
    mysqli_stmt_fetch($resultat);

    //si le résultat existe, on redirige vers paiment.php
    if (mysqli_stmt_num_rows($resultat) > 0 ) {

          /* Démarrer une nouvelle session */
          session_start();
        header('Location:paiment.php');
      
    }else {
        //sinon on créé un tableau de variable erreur et on affiche le message mot de passe incorrect.
        $error[] = 'Nom d\'utilisateur ou Mot de pass Incorrect 😢😭😭😢';
    
    }

     /* Fermer la connexion */
     mysqli_close($conn);
};

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../css/login_et_creer/logcreer.css">
</head>

<body>
    <header> <?php  include_once('entent.html') ?></header>

<div class="form-container">




   <form action="" method="post">
      <h3>Connexion</h3>
      <?php
      //récupéré le variable error et afffiche le message error.
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
     <input type="text" name="username" required placeholder="Nom d'utilisateur">
      <input type="password" name="code" required placeholder="Mot de Passe">
      <input type="submit" name="envoie" value="S'indentifier" class="button">
      <p>Vous n’avez pas encore de compte ? 😱 <a href="../tables/login_et_creer/creeruncompte.php"> Créez-en un !</a></p>
   </form>
</div>
<footer> <?php  include_once('pied.html') ?></footer>
</body>
</html>