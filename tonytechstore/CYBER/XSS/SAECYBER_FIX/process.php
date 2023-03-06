<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAECYBER</title>

    <style>
    /* Ajoutez du style à la page et à la boîte de dialogue ici */
    #modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }
    #modal-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #ffffff;
      padding: 20px;
      border: 1px solid #cccccc;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    #modal-close {
      position: absolute;
      top: 10px;
      right: 10px;
      font-size: 24px;
      cursor: pointer;
    }
  </style>

</head>
<body>
    <!-- Récupérez et affichez les données du formulaire -->
    <?php
    // Vérifiez si la clé "comment-input" existe dans le tableau "$_POST"
    if (isset($_POST['comment-input'])) {
        // Récupérez la valeur du champ de formulaire
        $comment = $_POST['comment-input'];
        // Échappez les caractères spéciaux et les balises HTML dans la valeur affichée sur la page
        $comment = htmlspecialchars($comment);
        // Affichez la valeur du champ de formulaire
        echo '<p>' . $comment . '</p>';
    }
    ?>

    <div id="modal">
        <div id="modal-content">
        <span id="modal-close">&times;</span>
        <!-- Échappez les caractères spéciaux et les balises HTML dans les données affichées dans la boîte de dialogue -->
        <p>You entered: <span id="modal-input"><?php echo escapeHtml($comment); ?></span></p>
        </div>
    </div>

  <script>
    // Affichez la boîte de dialogue lorsque la page est chargée
    window.onload = function() {
      document.getElementById('modal').style.display = 'block';
    }
    // Masquez la boîte de dialogue lorsque l'utilis ateur clique sur le bouton "Fermer".
    document.getElementById('modal-close').onclick = function() {
      document.getElementById('modal').style.display = 'none';
    }

     // Échappez les caractères spéciaux et les balises HTML dans une chaîne de caractères
     function escapeHtml(unsafe) {
      return unsafe
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
    }
  </script>

</body>
</html>