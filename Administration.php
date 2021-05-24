<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="css.css">
  <script src="CreaSeanceCheck.js"></script>
</head>
<body>
	<H1> Modification des  </H1>

<?php

	//Vérification de la connection.
	session_start();
	if(!$_SESSION['admin']){
		header('location: LoginEnter.php');
	}

    // Requète SQL du produit selectionné envoyé par a methode GET
    $con = mysqli_connect("localhost","root","root","Geekzone vitrine");

    $produit = $_POST['cp'];

	$Freq = "SELECT
                    rue,
                    cp,
                    ville,
                    image,
                    telephone,
                    horaires
            FROM boutique
            WHERE ";

	$Fresult = mysqli_query($con, $Freq);

	if (!$Fresult) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit; };

    // Affichage du produit
    $row = mysqli_fetch_row($Fresult);

echo "


	<!-- Formulaire POST pour créer une séance -->
    <table>
		<form id='action' action='CreaSeance.php' method='post'>
			<tr>
				<td colspan='2' class='bouton'>
					<h2 class='Title'> Créer une séance </h2>
				</td>
			</tr>

			<tr>
				<td class='labeling'>
					<label>Date: </label>
				</td>
				<td><input type ='date' name='date'/></td>
			</tr>	
			<tr>
				<td>
					<input class='button3D' type='submit' name='valid' value='Créer la séance'/>
				</td>
		</form>

	</table>";
?>

</body>
</html>