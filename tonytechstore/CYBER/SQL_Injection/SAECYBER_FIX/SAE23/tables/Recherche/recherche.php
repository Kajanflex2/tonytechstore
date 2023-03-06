<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recherche</title>
</head>
<body>
    
</body>
</html>

<form method="POST"action=""> 
     <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!"> 
     </form>
     </html>

     <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'mydb';

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }

            echo "Connexion Réussie" ;
            echo "<br>";

     // Récupère la recherche
     $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
     $q = $conn->query(

     "SELECT designation,categorie FROM article
      WHERE designation LIKE '%$recherche%'
      OR categorie LIKE '%$recherche%'
      LIMIT 100");

     // affichage du résultat
     while( $r = mysqli_fetch_array($q)){
     echo 'Résultat de la recherche: '.$r['designation'].', '.$r['categorie'].' <br />';
     }
?>


<html>





     