<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="form-uno.css">
	</head>
	<body>
		<?php
		$Affitto_netto_su_12_mesi = $_POST['Obbiettivo'];
		$Affitto_lordo_annuo = $_POST['Capitale'];
		$Aliquota = $_POST['Aliquota'];
		$IMU = $_POST['Imu'];
		?>
		
		<form method="POST">
			<table>
				<tr>
					<td>
						<label for="Obbiettivo">Obbiettivo: Euro</label>
					</td>
					<td>
						<input type="text" name="obbiettivo" class="testo";/> al mese
					</td>
				</tr>
				<tr>
					<td>
						<label for="IMU">IMU: Euro</label>
					</td>
					<td>
						<input type="text" name="IMU" class="testo"/>
					</td>
				</tr>
				<tr>
					<td>
						<label for="Aliquota">Aliquota:</label>
					</td>
					<td>
						<input type="aliquota" name="Aliquota" class="testo"/> % dell'imponibile
					</td>
				</tr>
				
				<tr>
					<td>
						</select>
						<input type="submit" value="Calcola" />
					</td>
				</tr>	
			</table>
		</form>
	Per ottenere _______ euro al mese, l'affitto dovr&agrave; essere di ____ euro.<br>
	L'imponibile sar&agrave; quindi di ____ euro sul quale pagherai ____ euro di tasse.
	</body>
</html>

	
