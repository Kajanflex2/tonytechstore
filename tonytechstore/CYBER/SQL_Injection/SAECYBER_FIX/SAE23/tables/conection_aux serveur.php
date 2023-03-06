<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Serveur</title>

</head>
<body>

        <?php
           $servername = "localhost";
           $username = "root";
           $password = "";
           $dbname = "mydb";
        
            
            //On établit la connexion
            $conn = new mysqli ($servername, $username, $password, $dbname);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die("Connextion failed: " . $conn->connect_error);
            }

        ?>

    </body>
</html>
