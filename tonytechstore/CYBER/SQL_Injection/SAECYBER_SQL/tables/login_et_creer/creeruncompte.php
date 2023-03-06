<?php

    @include '../conection_aux serveur.php';

    if(isset($_POST['envoie'])){

        $nom = $_POST['nom'];
        $mail = $_POST['mail'];
        $prenom= $_POST['prenom'];
        $adresse = $_POST['adresse'];
        $ville = $_POST['ville'];
        $code = $_POST['code'];
        $age = $_POST['age'];


    

        $selection="SELECT * FROM Client WHERE mail='$mail' && code='$code'";

        $resultat=mysqli_query($conn,$selection);

        if (mysqli_num_rows($resultat) > 0 ) {

         $error[] = 'Vous Avez Déja Un Compte ❕😱❕';
        }else {
         $requete = "INSERT INTO client (nom, prenom, adresse, ville, mail, code, age) VALUES ('$nom', '$prenom', '$adresse', '$ville', '$mail' , '$code', '$age')";
         mysqli_query($conn, $requete);
         header('location:../../pages/paiment.php');
        }
        
    };

?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Créer Mon Compte</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../../css/login_et_creer/logcreer.css">

</head>
<body>


   
<div class="form-container">

   <form action="" method="post">
      <h3> Créer gratuitement un compte </h3>

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="text" name="nom" required placeholder="Votre Nom">
      <input type="text" name="prenom" required placeholder="Votre Prénom">
      <input type="text" name="adresse" required placeholder="Adresse">
      <input type="text" name="ville" required placeholder="Ville">
      <input type="email" name="mail" required placeholder="Adresse e-mail">
      <input type="password" name="code" required placeholder="Mot de Passe">
      <input type="number" name="age" required placeholder="Age">
      <input type="submit" name="envoie" value="Créer Un Compte" class="button">
      <p>Avez-Vous déja un compte ? <a href="../../pages/saisieclient.php">Connexion</a></p>
   </form>
</div>

</body>
</html>