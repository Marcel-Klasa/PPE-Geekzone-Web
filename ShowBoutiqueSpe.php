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
  <li><a class="margin1 btn btn-success" href="index.html">Acceuil</a></li>
  <li><a class="margin1 btn btn-success" href="ShowProduit.php">Produits</a></li>
  <li><a class="margin1 btn btn-success" href="ShowBoutique.php">Boutiques</a></li>
  <li><a class="margin1 btn btn-success" href="#">Contact</a></li>
  <img src="Images/Geekzone_Logo.png" height="50px" align="right">
</ul>
<!-- Indicateur "Où suis-je?" -->
<ul class="breadcrumb">
  <li><a href="index.html">Acceuil</a></li>
  <li><a href="ShowBoutique.php">Boutique</a></li>

<?php
	$ville = $_POST['vll'];
	$cp = $_POST['cpl'];
	$rue = $_POST['rue'];
	$image = $_POST['img'];
	$tel = $_POST['tel'];
  $horaire = $_POST['hrr'];

echo "

	<li class='active'> " . $ville . " </li>
</ul>

    <div class='margin1 black'>
        <div style='float:left' class='margin1 black'>
            <img src='Images/boutiques/" . $image . "' height='500px'>
        </div>

        <div style='float:leftt' class='margin1 black'>
            <table>
                <tr>
                    <td class='labeling'><b>Adresse: </b></td>
                    <td> " . $ville . "," . $cp . "," . $rue . " </td>
                </tr>
                <tr>
                    <td class='labeling'><b>Horaires: </b></td>
                    <td> " . $horaire . " </td>
                </tr>
                <tr>
                    <td class='labeling'><b>Téléphone: </b></td>
                    <td> " . $tel . " </td>
                </tr>
            </table>
        </div>
    </div>
    ";
?>