<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css">
	</head>
	<body>
		<form id="form1" name="form1" method="post" action="esito.php">
			<p>
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome" />
			</p>
			<p>
				<label for="email">Email</label>
				<input type="text" name="email" id="email" />
			</p>
			<p>
				<label for="messaggio">Messaggio</label>
				<textarea name="messaggio" id="messaggio" cols="45" rows="5"></textarea>
			</p>
			<p>
				<input name="privacy" type="checkbox" id="privacy" value="1" />
				<label for="privacy">....Testo della Privacy....</label></p>
			<p>
				<label for="captcha">Digita il Codice di verifica</label>
				<input type="text" name="captcha" id="captcha" />
				<img src="captcha.php" alt="captcha image"></p>
			<p>
				<input type="submit" name="submit" id="submit" value="Invia Messaggio" />
			</p>
		</form>
	</body>
</html>
