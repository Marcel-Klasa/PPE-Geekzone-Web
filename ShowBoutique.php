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
  <li class="active">Boutiques</li>
</ul>

<!-- Requète SQL et affichage des différents produits -->
<?php
    // Requète SQL des différents produits [table produit] et le nom de catégorie de produit [table categorie]
    $con = mysqli_connect("localhost","root","root","Geekzone vitrine");

	$Freq = "SELECT
                    ville,
                    cp,
                    rue,
                    image,
                    telephone,
                    horaires
            FROM boutique";

	$Fresult = mysqli_query($con, $Freq);

	if (!$Fresult) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit; };

    // Affichage des différents produits
    while($row = mysqli_fetch_row($Fresult)) {

    echo "
    <div class='margin1 black'>
        <div style='float:left' class='margin1 black'>
            <img src='Images/boutiques/" . $row[3] . "' height='150px'>
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
            </table>
        </div>

        <form id='action' action='ShowBoutiqueSpe.php' method='post' accept-charset='utf-8'>
            <input type ='hidden' name='vll' value='" . $row[0] . "'>
            <input type ='hidden' name='cpl' value='" . $row[1] . "'>
            <input type ='hidden' name='rue' value='" . $row[2] . "'>
            <input type ='hidden' name='img' value='" . $row[3] . "'>
            <input type ='hidden' name='tel' value='" . $row[4] . "'>
            <input type ='hidden' name='hrr' value='" . $row[5] . "'>
            <input type ='submit' class='btn btn-success' value='Plus d`informations'>
        </form>

        <hr class='margin1 black'>
    </div>
    ";
    }
    
mysqli_free_result($Fresult);
mysqli_close($con);

?>
</body>
</html>
