<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="form-uno.css">
	</head>
	<body>
		<?php
			$utenti = array();
			$utenti['luca'] = 'password123';
			$utenti['fede'] = 'silenzio';
			
			if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
				if(
				
				} else {
					echo "Autenticazione richiesta:";
				}
				
			//var_dump($_POST);
		?>
		<form method="POST">
			<table>
				<tr>
					<td>
						<label for="nomeutente">Nome utente:</label>
					</td>
					<td>
						<input type="text" name="nomeutente" class="testo";/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="Cognome">Cognome:</label>
					</td>
					<td>
						<input type="text" name="cognome" class="testo"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="passwd">Password:</label>
					</td>
					<td>
						<input type="password" name="passwd" class="testo password"/>
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="submit" value="Invia dati" />
						<input type="reset" value="Cancella dati" />
					</td>
				</tr>
			</table>
		
		</form>
		
	</body>
</html>
