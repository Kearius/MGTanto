<?php
	session_start();
	if (!isset($_SESSION['zalogowany'])) {
		header('Location: index.php');
		exit();
	}

	require __DIR__ . '/vendor/autoload.php';
	$baseUrl = "http://localhost/tanto/";
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Zalogowano</title>
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
<?php
	require_once "connect.php";
	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	$rezultat = $polaczenie->query("SELECT * FROM kategorie INNER JOIN potrawy ON kategorie.kat_tytul_pl = potrawy.pot_nalezy_do");
	
	while ($row = $rezultat->fetch_assoc()) {
		$categories[$row['kat_tytul_pl']][] = [
			'pot_tytul_pl' => $row['pot_tytul_pl'],
			'pot_sklad_pl' => $row['pot_sklad_pl']
		];
	}
?>
<div id="welcome-s-1">
	<div class="content">
		<div class="admin-panel">
			<nav>
				<a href="welcome.php">Start</a>
				<a href="categoryadd.php">Dodaj Kategorię</a>
				<a href="foodadd.php">Dodaj Potrawę</a>
				<a class="logout" href="logout.php">Logout</a>
				<div class="clear"></div>
			</nav>
			<div class="panel-boxes">
				<ul>
					<?php foreach($categories as $category => $foods): ?>
						<li>
							<div class="category-box">
								<label><?= $category ?></label>
								<div class="category-box-buttons">
									<a class="animate" href="categoryedit.php">Edytuj</a>
									<a class="animate" href="categorydel.php">Usuń</a>
								</div>
								<div class="clear"></div>
							</div>
							<ul>
								<?php foreach($foods as $food): ?>
									<li>
										<div class="food-box">
											<label><?= $food['pot_tytul_pl'] ?></label>
											<div class="food-box-buttons">
												<a class="animate" href="foodedit.php">Edytuj</a>
												<a class="animate" href="fooddel.php">Usuń</a>
											</div>
											<div class="clear"></div>
										</div>
									</li>
								<?php endforeach ?>
							</ul>
						</li>
					<?php endforeach ?>
				</ul>
			</div>
		</div>
	</div>
</div>
</body>
</html>