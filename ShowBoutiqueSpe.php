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

<!-- Requète SQL et affichage de la boutique -->
<?php
    // Requète SQL de la boutique selectionnée envoyé par a methode GET
	$lieu = $_GET['lieu'];

  $con = mysqli_connect("localhost","root","root","Geekzone vitrine");

  $Freq = "SELECT
                    ville,
                    cp,
                    rue,
                    image,
                    telephone,
                    horaires,
                    id
            FROM boutique
            WHERE boutique.id = $lieu";

  $Fresult = mysqli_query($con, $Freq);

  if (!$Fresult) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit; };

  // Affichage de la boutique
    $row = mysqli_fetch_row($Fresult);

echo "

	<li class='active'> " . $row[0] . " </li>
</ul>

    <div class='margin1 black'>
        <div style='float:left' class='margin1 black'>
            <img src='Images/boutiques/" . $row[3] . "' height='500px'>
        </div>

        <div style='float:leftt' class='margin1 black'>
            <table>
                <tr>
                    <td class='labeling'><b>Adresse: </b></td>
                    <td> " . $row[0] . "," . $row[1] . "," . $row[2] . " </td>
                </tr>
                <tr>
                    <td class='labeling'><b>Horaires: </b></td>
                    <td> " . $row[5] . " </td>
                </tr>
                <tr>
                    <td class='labeling'><b>Téléphone: </b></td>
                    <td> " . $row[4] . " </td>
                </tr>
            </table>
        </div>
    </div>
    ";
?>