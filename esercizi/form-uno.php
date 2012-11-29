<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="form-uno.css">
	</head>
	<body>
		<form method="GET">
			<table>
				<tr>
					<td>
						<label for="nome">Nome:</label>
					</td>
					<td>
						<input type="text" name="nome" class="testo";/>
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
						<label for="sesso">Sesso:</label>
					</td>
					<td>
						<input type="radio" name="sesso" value="M">Maschio</input><br/>
						<input type="radio" name="sesso" value="F">Femmina</input><br/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="colori">Colori:</label>
					</td>
					<td>
						<input type="checkbox" name="colori" value="#F00">Rosso</input>
						<input type="checkbox" name="colori" value="#F0">Verde</input>
						<input type="checkbox" name="colori" value="#00F">Blu</input>
						<input type="checkbox" name="colori" value="#000">Nero</input>
						<input type="checkbox" name="colori" value="#FFF">Bianco</input>
					</td>
				</tr>
				</tr>
				<tr>
					<td>
						<label for="nazionalita">Nazionalit&agrave;:</label>
					</td>
					<td>
						<select name="nazionalita">
							<option value="IT">Italiana</option>
							<option value="FR">Francese</option>
							<option value="EN">Inglese</option>
							<option value="EAK">Keniota</option>
							<option value="DE">Tedesca</option>
						</select>
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
