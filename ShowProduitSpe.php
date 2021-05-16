<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>GeekZone</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <base href="./">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://bootswatch.com/3/lumen/bootstrap.min.css" />
  <link rel="stylesheet" href="css.css">
  <!-- <script src="CreaSeanceCheck.js"></script> -->
</head>
<body class='margin1 black'>

<!-- Navigation -->
<ul class="nav nav-pills black">
  <li><a class="margin1 btn btn-success" href="index.html">Accueil</a></li>
  <li><a class="margin1 btn btn-success" href="ShowProduit.php">Produits</a></li>
  <li><a class="margin1 btn btn-success" href="ShowBoutique.php">Boutiques</a></li>
  <li><a class="margin1 btn btn-success" href="#">Contact</a></li>
  <img src="Images/Geekzone_Logo.png" height="50px" align="right">
</ul>
<!-- Indicateur "Où suis-je?" -->
<ul class="breadcrumb">
  <li><a href="index.html">Accueil</a></li>
  <li><a href="ShowProduit.php">Produits</a></li>

<?php
	$libelle = $_POST['lib'];
	$description = $_POST['dsc'];
	$image = $_POST['img'];
	$nom = $_POST['nom'];
	$prix = $_POST['prx'];

echo "

	<li class='active'> " . $nom . " </li>
</ul>

    <div class='margin1 black'>
        <div style='float:left' class='margin1 black'>
            <img src='Images/" . $libelle . "/" . $image . "' height='500px'>
        </div>

        <div style='float:leftt' class='margin1 black'>
            <table>
                <tr>
                    <td class='labeling'><b>Nom: </b></td>
                    <td> " . $nom . " </td>
                </tr>
                <tr>
                    <td class='labeling'><b>Prix: </b></td>
                    <td> " . $prix . " </td>
                </tr>
            </table>
        </div>

        <div class='margin1 black'>
            <table>
                <tr>
                    <td class='labeling'><b>Description: </b></td>
                    <td class='maxwidth'> " . $description . " </td>
                </tr>
            </table>
        </div>
    </div>
    ";
?>