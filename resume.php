
<!DOCTYPE html>
<html>
<head>
	<title>cible</title>
	<meta charset="utf-8">
</head>

<body>



<?php
if(isset($_POST["choix"])){$civilite=$_POST["choix"];}
if(isset($_POST['nom'])){$nom=$_POST["nom"];}
if(isset($_POST['prenom'])){$prenom=$_POST["prenom"];}
if(isset($_POST['email'])){$mail=$_POST["email"];}
if(isset($_POST['message'])){$com=$_POST["message"];}

if(isset($_POST['multiplier'])){
	for ($i=0; $i <$_POST['multiplier'] ; $i++) 
	{ echo $nom." <br />";
	# code...
	}
}

echo "vous avez saisi : ".$civilite." ".$nom;
echo "<br />";
echo $prenom;
echo "<br />";
echo $mail;
echo "<br />";
echo $com." <br />";

foreach ($_POST['pays'] as $pay) {
	echo "<br />";
	echo $pay;
}

?>
<p>
Si tu veux changer de prénom, 
<a href="formulaire2.html">clique ici</a> pour revenir à la page formulaire.php.</p>

</body>
</html>