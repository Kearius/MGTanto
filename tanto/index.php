<?php $title = "Tanto - Restauracja"; ?>
<?php include 'header.php'; ?>
<div id="home-s-1">
	<div class="home-s-1-slider position-vertical-center">
		<div class="home-s-1-slide">
			<h1>Wykwalifikowani kucharze</h1>
			<p>Nasi kucharze zadbają o to aby klient spożywając przygotowany posiłek nakarmił nie tylko ciało, ale i ducha.</p>
		</div>
		<div class="home-s-1-slide">
			<h1>Bardzo miła obsługa</h1>
			<p>Pracownicy zawsze chętnie doradzą tak, aby nawet najbardziej niezdecydowani klienci dokonali prawidłowego wyboru.</p>
		</div>
		<div class="home-s-1-slide">
			<h1>Ogromny wybór</h1>
			<p>Nasze menu zawiera szeroką gamę wyboru, żeby nie było najmniejszego problemu w znalezieniu czegoś dla siebie.</p>
		</div>
	</div>
	<div class="content">
		<div class="home-s-1-button position-vertical-center">
			<a class="animate position-vertical-center">Zobacz obiad dnia</a>
		</div>
	</div>
</div>
<div id="home-s-2">
	<div class="home-s-2-intro">
		<div class="dinner-day-icon"><img src="<?= $baseUrl; ?>assets/images/fork.png"></div>
	</div>
	<div class="content">

		<div class="dinner-day">
			<h2>Obiad dnia</h2>

				<div class="home-s-2-slider">

					<div class="dinner-day-box">
						<div class="label-box">
							<label>Poniedziałek</label>
						</div>
						<div class="dinner-box">
							<p>Ravioli 150g<span class="menu-price position-vertical-center">12 zł</span></p>
							<hr>
							<span>Ricotta, szpinak, sos pomidorowy</span>
						</div>
					</div>
					<div class="dinner-day-box">
						<div class="label-box">
							<label>Wtorek</label>
						</div>
						<div class="dinner-box">
							<p>Bruschetta 2 szt<span class="menu-price position-vertical-center">12 zł</span></p>
							<hr>
							<span>Pomidory, bazylia, mozzarella</span>
						</div>
					</div>
					<div class="dinner-day-box">
						<div class="label-box">
							<label>Środa</label>
						</div>
						<div class="dinner-box">
							<p>Bruschetta z szynką parmeńską 2 szt<span class="menu-price position-vertical-center">16 zł</span></p>
							<hr>
							<span>Szynka parmeńska, pomidory, bazylia, mozzarella</span>
						</div>
					</div>
					<div class="dinner-day-box">
						<div class="label-box">
							<label>Czwartek</label>
						</div>
						<div class="dinner-box">
							<p>Carpaccio 100 g<span class="menu-price position-vertical-center">28 zł</span></p>
							<hr>
							<span>Polędwica wołowa, parmezan, rukola</span>
						</div>
					</div>
					<div class="dinner-day-box">
						<div class="label-box">
							<label>Piątek</label>
						</div>
						<div class="dinner-box">
							<p>Krewetki Królewske 6 szt<span class="menu-price position-vertical-center">26 zł</span></p>
							<hr>
							<span>Krewetki, czosnek, papryczka chilli</span>
						</div>
					</div>

				</div>

		</div>
	</div>
</div>
<div id="home-s-3">
	<div class="button-box position-vertical-center">
		<p>Zapraszamy</p>
	</div>
</div>
<div id="home-s-4">
	<h2>Płać czym chcesz</h2>
	<p>Akceptujemy płatności kartami płatniczymi i kredytowymi</p>
	<img src="<?= $baseUrl; ?>assets/images/payment.jpg">
</div>
<?php include 'footer.php'; ?>