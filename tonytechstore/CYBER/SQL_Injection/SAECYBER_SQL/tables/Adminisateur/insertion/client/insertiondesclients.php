<?php
if(isset($_POST['envoi'])){
    if($_POST['envoi']=="Enregistrer" && $_POST['id_client'] && $_POST["nom"] && $_POST["prenom"] && $_POST["adresse"] && $_POST["ville"] && $_POST["mail"] && $_POST["code"] && $_POST["age"]){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb";

            $id_client =$_POST['id_client'];
            $nom = $_POST['nom'];
            $prenom= $_POST['prenom'];
            $adresse = $_POST['adresse'];
            $ville = $_POST['ville'];
            $mail = $_POST['mail'];
            $code = $_POST['code'];
            $age = $_POST['age'];

            //Create connection
            $conn = new mysqli ($servername, $username, $password, $dbname);
            //Check connection 
            if ($conn->connect_error){
                die("Connextion failed: " . $conn->connect_error);
            }
            
            //Création de la requête
            $requete = "INSERT INTO client (id_client, nom, prenom, adresse, ville, mail, code, age) VALUES ('$id_client','$nom', '$prenom', '$adresse', '$ville', '$mail' , '$code', '$age')";
            $conn->query($requete);
            $conn->close();
            header("Location:ajouterdesclients.html");
            
        }
        elseif($_POST['envoi']!=="Page d'accueil"){
            echo "<script type=\"text/javascript\">alert('Erreur de saisie ? ⌨ ');</script>";
            echo "<script type=\"text/javascript\">window.location='ajouterdesclients.html'</script>";
        }
        else{
            header("Location:ajouterdesclients.html");
            //echo "<script type=\"text/javascript\">window.location='page_accueil_vend.php</script>";
        }
}

$conn->close();
?>