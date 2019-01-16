<?php

// Connexion à la base de données
//host
$host = "localhost";
//user name
$username = "phpmyadmin";
//database password
$pwd = "Pain38Less";
//database name.
$db = "tests";
$con=mysqli_connect($host,$username,$pwd,$db) or die("Unable to Connect");
if(mysqli_connect_error($con))
{
	echo "Failed to connect";
}



// Insertion du message à l'aide d'une requête préparée
$datetime = date("Y-m-d H:i:s");
$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

// Redirection du visiteur vers la page du minichat
$query=mysqli_query($con,"INSERT INTO chate (datemsg, pseudo, message) VALUES ('$datetime', '$pseudo', '$message')");
if($query){
header('Location: chat.php');
}
else{
	echo "error";
}

?>