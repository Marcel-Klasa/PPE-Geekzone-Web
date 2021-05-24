<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="icon" type="image/png" href="Images/FouDeFootLogo.png">
		<link rel="stylesheet" href="css.css">
		<title> FDF </title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
			session_start();
			if($_SESSION["admin"]){
				//header('location: Administration.php');
			} else {
				echo '<p class="erreur"> Connexion expirée ou mauvais nom/mot de passe. </p>';
			}
		?>
		<table>
			<form method='POST' action='Login.php'>
				<tr>
					<td>
						<h> Connexion administrateur</h>
					</td>
				</tr>
				<tr>
					<td>
						<font>Nom: </font>
					</td>
					<td><input type ='text' name='nom'/></td>
				</tr>
				<tr>
					<td>
						<font>Mot de passe: </font>
					</td>
					<td><input type ='text' name='mdp'/></td>
				</tr>
				<tr>
					<td colspan='2'>
						<input type="submit" name='valid' value="Se connecter"/>
					</td>
				</tr>
			</form>
		</table>
	</body>
</html>