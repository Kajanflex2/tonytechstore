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
            <h1>Connexion Réussie<span>à votre table article </span></h1>
            <p>Table Article est prête Admin</p>   
            <a href="tableclient.php" class="button"> Table Client</a>
            <a href="tablecommande.php" class="button"> Table Commande</a>

            <p>
                <?php
                        //connextion à xampp MySQL
                    $servername = 'localhost';
                    $username = 'root';
                    $password = '';
                    $dbname = 'mydb';

                    // créer le connexion
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Vérifier le connexion
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);

                    }

                // echo "<h1 classe='button'> Connexion Réussie </h1>" ;
                    // echo" <br>";
                    
                    //Création table article
                    $mytable= " CREATE TABLE article(
                                id_article CHAR(10) NOT NULL PRIMARY KEY,
                                designation VARCHAR(100) NOT NULL,
                                prix DECIMAL(8,2) NOT NULL,
                                categorie ENUM('Tous', 'Vidéo','Photo', 'Téléphonie', 'Informatique', 'Divers') NOT NULL
                    )";


                    //$insertable = "INSERT INTO  article (id_article,designation,prix,categorie) VALUES 
                // ('1', 'Apple Iphone 15 pro max','1999', 'Téléphonie'),
                    // ('2', 'Samsung Galaxy S20', '2999','Téléphonie'),
                    // ('3', 'Headphone GTP 854', '199', 'Informatique'),
                    // ('4', 'Lacoste Homme Analogique', '589', 'Informatique'),
                    // ('5', 'Nintendo Switch', '248.49', 'Informatique')";


                    if ($conn->query($mytable) === TRUE) {

                    //echo " <h3 classe='content'>Table articles created successfully 😎 </h3>";

                        //if ($conn->query($insertable) === TRUE) {

                            //echo"<br>";
                            //echo "<h2> <center> Les Données Articles sont bien insérée  dans le table 🏋️‍♀️ ⛹️‍♀️</center> </h2>";
                        
                        //} else {
                        // echo " <h3 classe='content'> What 🥶😱 </h3>";
                    // }

                    } else {
                        echo"<br>";
                        echo "<p>Error creating table:</p>" . $conn->error;
                    }
                    
                    $conn->close();

                ?>

            </p>

        </div>

    </div>
        
</body>
</html>

