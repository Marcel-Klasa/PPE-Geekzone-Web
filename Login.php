<?php 
	session_start();
	$nomSaisi = $_POST['nom'];
	$mdpSaisi = $_POST['mdp'];

	$con = mysqli_connect("localhost","root","root","Geekzone vitrine");

    echo gettype($nomSaisi);

	$Freq = "SELECT
                    identifiant,
                    mdp,
                    cp
            FROM administration
            WHERE administration.identifiant = '$nomSaisi'";

	$Fresult = mysqli_query($con, $Freq);

	if (!$Fresult) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit; };

    $row = mysqli_fetch_row($Fresult);

    echo $row[2];

	if($mdpSaisi == $row[1]){
		$_SESSION["admin"] = true;
		$_SESSION["cp"] = $row[2];	
		header('location: Administration.php');
	} else {
		$_SESSION["admin"] = false;
		header('location: LoginEnter.php');
	}

?>


