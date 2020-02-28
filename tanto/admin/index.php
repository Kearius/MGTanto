<?php include 'header.php'; ?>
<div id="login-s-1">
	<div class="form-wrapper position-vertical-center">
		<form action="login.php" method="post">
			<div class="empty-header"></div>
			<label>Login:</label><input type="text" name="login">
			<label>Hasło:</label><input type="password" name="haslo">
			<div class="login-button-wrapper">
				<input type="submit" value="Zaloguj się">
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>