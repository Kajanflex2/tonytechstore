<?php
if(isset($_POST['envoi'])){
    if($_POST['envoi']=="Enregistrer" && $_POST["id_article"] && $_POST["designation"] && $_POST["prix"] && $_POST["categorie"] ){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

            $designation = $_POST['designation'];
            $id_article = $_POST['id_article'];
            $prix = $_POST['prix'];
            $categorie = $_POST['categorie'];

            //Create connection
            $conn = new mysqli ($servername, $username, $password, $dbname);
            //Check connection 
            if ($conn->connect_error){
                die("Connextion failed: " . $conn->connect_error);
            }
            
            //Création de la requête
            $requete = "INSERT INTO article (designation, prix, id_article, categorie)
            VALUES ('$designation', '$prix', '$id_article', '$categorie')";
            $conn->query($requete);
            $conn->close();
            header("Location:ajouterdesarticles.html");
            
        }
        elseif($_POST['envoi']!=="Page d'accueil"){
            echo "<script type=\"text/javascript\">alert('Erreur de saisie ? ⌨ ');</script>";
            echo "<script type=\"text/javascript\">window.location='ajouterdesarticles.html'</script>";
        }
        else{
            header("Location:ajouterdesarticles.html");
            //echo "<script type=\"text/javascript\">window.location='page_accueil_vend.php</script>";
        }
}

$conn->close();
?>