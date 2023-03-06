<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <link rel="stylesheet" href="../../../css/basedonnes/base.css">
   
</head>
    <body>
   
        <div class="container">

            <div class="content">


                <h3>Bonjour,<span> Administatuer 💻</span></h3>
                <h1>Connexion Réussie<span>à votre basse de donnée</span></h1>
                <p> Base de donnée est prête Admin</p>   
                <a href="../Creation_des_tables/tablearticle.php" class="button">Table Article</a>
                <a href="../Creation_des_tables/tableclient.php" class="button">Table Client</a>
                <a href="../Creation_des_tables/tablecommande.php" class="button">Table Commande</a>


                    <p class="phpcode">
                        
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";

                            // Créer le connexion avec Xampp MySQL
                            $conn = new mysqli($servername, $username, $password);

                            // Vérifier connection 
                            if ($conn->connect_error) {
                            die("La connexion a échoué:" . $conn->connect_error);
                            }

                            // echo "<h1 classe=content>Connexion Réussie<span>Admin</span></h1>" ;

                            // Create database

                            $sql = "CREATE DATABASE mydb";

                            if ($conn->query($sql) === TRUE) {
                            //  echo "<h1 classe='content'> Base de donnée est prête<span>Admin</span></h1>";
                            } else {
                            echo "Erreur :" . $conn->error;
                            }

                            $conn->close();    
                            ?>

                    </p>
                
            </div>

        </div>

    </body>
</html>

<!-- <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de données</title>
    <link rel="stylesheet" href="../css/basdonnes/base.css">
</head>
<body>
    

<div classe="container">

    <div class="content">
            

    <h3>Bonjour,<span> Admin</span></h3>
    <h1>Connexion Réussie<span>Admin</span></h1>
    <p> Base de donnée est prête Admin</p>   
    <a href="table_article.php" class="btn">Article</a>
    <a href="table_client.php" class="btn">Client</a>
    <a href="table_commande.php" class="btn">Commande</a>
   
    </div>

</div>
</body>
</html> -->

