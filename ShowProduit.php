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
  <li><a class="margin1 btn btn-success" href="ShopProduit.php">Produits</a></li>
  <li><a class="margin1 btn btn-success" href="ShowBoutique.php">Boutiques</a></li>
  <li><a class="margin1 btn btn-success" href="#">Contact</a></li>
  <img src="Images/Geekzone_Logo.png" height="50px" align="right">
</ul>
<!-- Indicateur "Où suis-je?" -->
<ul class="breadcrumb">
  <li><a href="index.html">Accueil</a></li>
  <li class="active">Produits</li>
</ul>

<!-- Requète SQL et affichage des différents produits -->
<?php
    // Requète SQL des différents produits [table produit] et le nom de catégorie de produit [table categorie]
    $con = mysqli_connect("localhost","root","root","Geekzone vitrine");

	$Freq = "SELECT
                    nom,
                    prix,
                    image,
                    description,
                    libelle
            FROM produit, categorie
            WHERE produit.categorie = categorie.categorie_id";

	$Fresult = mysqli_query($con, $Freq);

	if (!$Fresult) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit; };

    // Affichage des différents produits
    while($row = mysqli_fetch_row($Fresult)) {

    echo "
    <div class='margin1 black'>
        <div style='float:left' class='margin1 black'>
            <img src='Images/" . $row[4] . "/" . $row[2] . "' height='100px'>
        </div>

        <div style='float:leftt' class='margin1 black'>
            <table>
                <tr>
                    <td class='labeling'><b>Nom: </b></td>
                    <td> " . $row[0] . " </td>
                </tr>
                <tr>
                    <td class='labeling'><b>Prix: </b></td>
                    <td> " . $row[1] . " € </td>
                </tr>
            </table>
        </div>

        <div class='margin1 black'>
            <table>
                <tr>
                    <td class='labeling'><b>Description: </b></td>
                    <td class='maxwidth'> " . $row[3] . " </td>
                </tr>
            </table>
        </div>

        <form id='action' action='ShowProduitSpe.php' method='post' accept-charset='utf-8'>
            <input type ='hidden' name='nom' value='" . $row[0] . "'>
            <input type ='hidden' name='prx' value='" . $row[1] . "'>
            <input type ='hidden' name='img' value='" . $row[2] . "'>
            <input type ='hidden' name='dsc' value='" . $row[3] . "'>
            <input type ='hidden' name='lib' value='" . $row[4] . "'>
            <input type ='submit' class='btn btn-success' value='Voir le produit'>
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
