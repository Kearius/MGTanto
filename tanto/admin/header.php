<?php
	session_start();
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true)) {
		header('Location: welcome.php');
		exit();
	}
	$baseUrl = "http://localhost/tanto/";
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<link rel="alternate" href="https://PortoGym.pl" hreflang="pl" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Admin - Login</title>
	<link rel="stylesheet" type="text/css" href="<?= $baseUrl;?>assets/css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Kalam:300,400,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?= $baseUrl; ?>fav.png" />
	<style>
		body { font-family: 'Lato'; }
		input, textarea { font-family: 'Lato'; }
	</style>
</head>
<body>