<?php $baseUrl = "http://localhost/tanto/"; ?>
<?php include 'admin/config.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<link rel="alternate" href="https://PortoGym.pl" hreflang="pl" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= $baseUrl;?>assets/css/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Kalam:300,400,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link rel="icon" type="image/png" href="<?= $baseUrl; ?>fav.png" />
</head>
<body>
	<header class="animate">
		<div class="content">
			<nav>
				<a class="logo position-vertical-center">
					<img src="<?= $baseUrl; ?>assets/images/logo.png">
				</a>
				<ul class="ul-0 position-vertical-center">
					<li class="li-0"><a class="a-0 animate" href="<?= $baseUrl; ?>"><?php echo $lang["menu.home"]; ?></a></li>
					<li class="li-0"><a class="a-0 animate" href="<?= $baseUrl; ?>menu">Menu</a><!-- 
						<ul class="ul-1">
							<li class="li-1"><a class="a-1 animate">1</a></li>
							<li class="li-1"><a class="a-1 animate">2</a></li>
							<li class="li-1"><a class="a-1 animate">3</a></li>
							<li class="li-1"><a class="a-1 animate">4</a></li>
							<li class="li-1"><a class="a-1 animate">5</a></li>
							<li class="li-1"><a class="a-1 animate">6</a></li>
							<li class="li-1"><a class="a-1 animate">7</a></li>
						</ul> -->
					</li>
					<li class="li-0"><a class="a-0 animate" href="<?= $baseUrl; ?>contact"><?php echo $lang["menu.contact"]; ?></a></li>
					<li class="lang-box">
						<a href="<?= $baseUrl; ?>?lang=pl">PL</a>
						<a href="<?= $baseUrl; ?>?lang=en">ENG</a>
					</li>
				</ul>
				<div class="clear"></div>
			</nav>
		</div>
	</header>