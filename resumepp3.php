
<!DOCTYPE html>
<html>
<head>
	<title>cible</title>
	<meta charset="utf-8">
</head>

<body>



<?php
//Vous concernant...
if(isset($_POST["choix"])){$civilite=$_POST["choix"];}
if(isset($_POST['nom'])){$nom=$_POST["nom"];}
if(isset($_POST['prenom'])){$prenom=$_POST["prenom"];}
if(isset($_POST['adresse'])){$adresse=$_POST['adresse'];}
if(isset($_POST['ville'])){$ville=$_POST['ville'];}
if(isset($_POST['codepostale'])){$cp=$_POST['codepostale'];}
if(isset($_POST['email'])){$mail=$_POST["email"];}
if(isset($_POST['telephone'])){$tel=$_POST["telephone"];}

if(isset($_POST['message'])){$com=$_POST["message"];}
//Fiancement...
if(isset($_POST['financer'])){$financement=$_POST["financer"];}

echo "vous avez saisi : ".$civilite." ".$nom;
echo "<br />";
echo $prenom;
echo "<br />";
echo $adresse.' <br/>';

echo $ville.' <br/>';
//echo $cp.' <br/>';
if(preg_match("#^[0-9]{2}[ ]?[0-9]{3}$#", $cp))
	{echo 'Le'. $cp .'est valide';}
	else
	{echo 'Le'. $cp .'invalide, veuillez corriger';};
echo "<br />";

echo $mail;
echo "<br />";
if (preg_match("#^0[1-7]([-. ]?[0-9]{2}){4}$#", $tel))
    {
        echo 'Le ' . $tel . ' est un numéro <strong>valide</strong> !';
    }
    else
    {
        echo 'Le ' . $tel . ' n\'est pas valide, recommencez !';
    };

echo "<br />";
echo "vous avez un Fiancement de type : ".$financement." <br />";
echo $com." <br />";

?>
<p> 
<a href="formulairepp3.html">clique ici</a> pour revenir à la page formulaire</p>

</body>
</html>