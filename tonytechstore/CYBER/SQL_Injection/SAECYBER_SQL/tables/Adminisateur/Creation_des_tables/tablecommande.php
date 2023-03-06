<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de données</title>
    <link rel="stylesheet" href="../../../css/basedonnes/base.css">

</head>
    <body>
    
        <div class="container">

            <div class="content">

                <h3>Bonjour,<span> Administatuer 💻</span></h3>
                <h1>Connexion Réussie <span>à votre table commande </span></h1>
                <p>Table Commande est prête Admin</p>   
                <a href="../insertion/article/ajouterdesarticles.html" target="_blank" class="button"> Insérer Article</a>
                <a href="../insertion/client/ajouterdesclients.html"  target="_blank"class="button"> Insérer Utilisitateur</a>

                <p>

    
                    <?php

                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'mydb';

                        // Créer le connexion 
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Vérifie le connexion
                        if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);

                        }

                        //echo 'Connexion Réussie' ;
                        echo" <br>";
                        
                        //créer le table commande
                        $mycommande= "CREATE TABLE commande (
                            id_comm MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            id_client MEDIUMINT NOT NULL,
                            FOREIGN KEY (id_client) REFERENCES client (id_client),
                            date DATE NOT NULL 
                        )";
            
                        if ($conn->query($mycommande) === TRUE) {
                            //echo " <h3> Table commande created successfully </h3>";
                        } else {
                            echo " <b>Error creating table: </b>" . $conn->error;
                        }
                        
                        $conn->close();

                    ?>

                </p>
                
            </div>
        </div>

    </body>
</html>

