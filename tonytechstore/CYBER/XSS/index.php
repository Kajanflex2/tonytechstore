<!DOCTYPE html>
<html>
<head>
	<title>BGP</title>
	
	<style>

		@import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");

body {
  margin: 0px;
  padding: 0px;
  background-color: #fef1df;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: "Roboto", sans-serif;
  font-weight: bold;
}

form {
  padding: 30px;
  background-color: white;
  border-radius: 10px;
}
form h1 {
  font-size: 20px;
}
form .separation {
  width: 100%;
  height: 1px;
  background-color: #747cdf;
}
form .corps-formulaire {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 30px;
}
form .corps-formulaire .groupe {
  position: relative; /* Pour mettre positionner l’élément dans le flux normal de la page */
  margin-top: 20px;
  display: flex;
  flex-direction: column;
}
form .corps-formulaire .gauche .groupe input {
  margin-top: 5px;
  padding: 10px 5px 10px 30px;
  border: 1px solid #c9c9c9;
  outline-color: #747cdf;
  border-radius: 5px;
}
form .corps-formulaire .gauche .groupe i {
  position: absolute; /* positionné par rapport à son parent le plus proche positionné */
  left: 0;
  top: 25px;
  padding: 9px 8px;
  color: #747cdf;
}
form .corps-formulaire .droite {
  margin-left: 40px;
}
form .corps-formulaire .droite .groupe {
  height: 100%;
}
form .corps-formulaire .droite .groupe textarea {
  margin-top: 5px;
  padding: 10px;
  background-color: #f1f1f1;
  border: 2px solid #747cdf;
  outline: none;
  border-radius: 5px;
  resize: none;
  height: 72%;
}
form .pied-formulaire button {
  margin-top: 10px;
  background-color: #747cdf;
  color: white;
  font-size: 15px;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  outline: none;
  cursor: pointer;
  transition: transform 0.5s;
}
form .pied-formulaire button:hover {
  transform: scale(1.05);
}

@media screen and (max-width: 920px) {
  form .corps-formulaire .droite {
    margin-left: 0px;
  }
}
	</style>
	
</head>
<body>
	<h1>Beautiful GateWay Protocole </h1>
	
 
	<form id="commentForm">
		<p>Je partage mes idées : </p>

		<textarea id="comment"></textarea>
    <br>
		<button type="submit">Envoyer</button>
    <br>
	</form>
	
	
	<table id="comments">
		<tr>
			<th>Mes Idées 🤔🤔🤔: </th>
		</tr>
	</table>
	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.0/angular.js"></script>
	
	
	<script>

	
		var comments = [];
		
		function onFormSubmit(event) {
      
			event.preventDefault();
		
			var comment = document.getElementById('comment').value;
		
			comments.push(comment);
		
			var row = document.createElement("tr");

			var cell = document.createElement("td");
			
			cell.innerHTML = comment;
			
			row.appendChild(cell);

			document.getElementById("comments").appendChild(row);

		}
		

		var form = document.getElementById("commentForm");

		form.addEventListener("submit", onFormSubmit);

	</script>

</body>
</html>
