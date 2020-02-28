<?php

	session_start();
	
	if ((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location: index.php');
		exit();
	}

	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];

		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM admin WHERE login='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();

				if ($haslo == $wiersz['haslo']) {

					$_SESSION['zalogowany'] = true;
					$_SESSION['id_kat'] = $wiersz['id_kat'];
					$_SESSION['kat_tytul_pl'] = $wiersz['kat_tytul_pl'];
					$_SESSION['kat_tytul_en'] = $wiersz['kat_tytul_en'];
					$_SESSION['id_pot'] = $wiersz['id_pot'];
					$_SESSION['pot_tytul_pl'] = $wiersz['pot_tytul_pl'];
					$_SESSION['pot_tytul_en'] = $wiersz['pot_tytul_en'];
					$_SESSION['pot_nalezy_do'] = $wiersz['pot_nalezy_do'];
					
					unset($_SESSION['blad']);
					$rezultat->free_result();
					header('Location: welcome.php');
				}
				else 
				{
					$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
					header('Location: index.php');
				}
				
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
				
			}
			
		}
		
		$polaczenie->close();
	}
	
?>