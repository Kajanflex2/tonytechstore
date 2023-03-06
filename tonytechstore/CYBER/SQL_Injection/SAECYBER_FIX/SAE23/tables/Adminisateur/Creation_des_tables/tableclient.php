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
                <h1>Connexion Réussie<span>à votre table client </span></h1>
                <p>Table Article est prête Admin</p>   
                <a href="tablearticle.php" class="button"> Table Article</a>
                <a href="tablecommande.php" class="button"> Table Commande</a>

                <p>
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

                        //echo "Connexion Réussie" ;
                        echo "<br>";

                        //Créer la table Client

                        $myclient = "CREATE TABLE client (
                            id_client MEDIUMINT PRIMARY KEY NOT NULL AUTO_INCREMENT,
                            nom CHAR(40) NOT NULL,
                            prenom CHAR(40) NOT NULL,
                            adresse CHAR(40) NOT NULL,
                            ville CHAR(40) NOT NULL,
                            mail CHAR(40) NOT NULL,
                            code CHAR(40) NOT NULL,
                            age TINYINT UNSIGNED
                        )";

                        

                        if ($conn->query($myclient) === TRUE) {

                            //echo " <h3> Table Client created successfully </h3>";


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