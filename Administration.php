<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="https://bootswatch.com/3/lumen/bootstrap.min.css" />
  <!-- <link rel="stylesheet" href="css.css"> -->
  <script src="CreaSeanceCheck.js"></script>
</head>
<body>
	<H1> Modification des informations de la boutique </H1>

<?php

	//Vérification de la connection.
	session_start();
	if(!$_SESSION['admin']){
		header('location: LoginEnter.php');
	}

    $con = mysqli_connect("localhost","root","root","Geekzone vitrine");

    $cp = $_SESSION['cp'];

	$Freq = "SELECT
                    rue,
                    cp,
                    ville,
                    image,
                    telephone,
                    horaires,
                    id
            FROM boutique
            WHERE boutique.cp = '$cp'";

	$Fresult = mysqli_query($con, $Freq);

	if (!$Fresult) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit; };

    // Affichage du produit
    $row = mysqli_fetch_row($Fresult);

echo "


	<!-- Formulaire POST pour créer une séance -->
    <table>
		<form id='action' action='ValidAdmin.php?id=" . $row[6] . "' method='post'>
			<tr>
				<td colspan='2' class='bouton'>
					<h2 class='Title'> Modifier les informations </h2>
				</td>
			</tr>

			<tr>
				<td> <label>Rue: </td><td>  </label> </td>
			</tr>
			<tr>
				<td></td><td> <input type ='text' name='rue' value='" . $row[0] . "'/> </td>
			</tr>
			<tr>
				<td> <label>Code postal: </td><td>  </label> </td>
			</tr>
			<tr>
				<td></td><td> <input type ='text' name='cp' value='" . $row[1] . "'/> </td>
			</tr>
			<tr>
				<td> <label>Ville: </td><td>  </label> </td>
			</tr>
			<tr>
				<td></td><td> <input type ='text' name='ville' value='" . $row[2] . "'/> </td>
			</tr>
			<tr>
				<td> <label>Image: </td><td>  </label> </td>
			</tr>
			<tr>
				<td></td><td> <input type ='text' name='image' value='" . $row[3] . "'/> </td>
			</tr>
			<tr>
				<td> <label>Téléphone: </td><td>  </label> </td>
			</tr>
			<tr>
				<td></td><td> <input type ='text' name='tel' value='" . $row[4] . "'/> </td>
			</tr>
			<tr>
				<td> <label>Horaires: </td><td>  </label> </td>
			</tr>
			<tr>
				<td></td><td> <input type ='text' name='horaires' value='" . $row[5] . "'/> </td>
			</tr>

			<tr>
			<td>
				<input class='btn btn-success' type='submit' name='valid' value='Modifier les informations'/>
			</td>
		</form>

	</table>";
?>

</body>
</html>