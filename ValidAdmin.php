<?php 
	session_start();

	$con = mysqli_connect("localhost","root","root","Geekzone vitrine");

	$rue = $_POST['rue'];
	$cp = $_POST['cp'];
	$ville = $_POST['ville'];
	$image = $_POST['image'];
	$tel = $_POST['tel'];
	$horaire = $_POST['horaires'];
	$id = $_POST['id'];

    echo $rue . $cp . $ville . $image . $tel . $horaire . $id;

	$Freq = "UPDATE boutique
			SET 
                    rue = '$rue',
                    cp = '$cp',
                    ville = '$ville',
                    image = '$image',
                    tel = '$tel',
                    horaire = '$horaire'
            WHERE boutique.id = '$id'";

	$Fresult = mysqli_query($con, $Freq);

	if (!$Fresult) {
    echo 'Could not run query: ' . mysqli_error($con);
    exit; };
?>
