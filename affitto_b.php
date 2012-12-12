<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="form-uno.css">
	</head>
	<body>
		<?php
		$Affitto_netto_mensile = $_POST['obbiettivo'];
		$Aliquota = $_POST['aliquota'];
		$IMU = $_POST['IMU'];
		$affitto_annuo_netto = 12*$Affitto_netto_mensile;
		?>
		
		<form method="POST">
			<table>
				<tr>
					<td>
						<label for="Obbiettivo">Obbiettivo: Euro</label>
					</td>
					<td>
						<input type="text" name="obbiettivo" class="testo"/> al mese
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
						<input type="text" name="aliquota" class="testo"/> % dell'imponibile
					</td>
				</tr>
				<tr>
					<td>
						</select>
						<input type="submit" value="Calcola"/>
					</td>
				</tr>	
			</table>
		</form>
		<?php
$affitto_lordo_annuo = (($affitto_annuo_netto+$IMU)*10000)/(9700-(85*$Aliquota));
$tasse = ($affitto_lordo_annuo*0.85)*($Aliquota/100);
echo " Per ottenere ".$_POST['obbiettivo']." euro al mese, l'affitto dovr&agrave essere di ".number_format($affitto_lordo_annuo, 2, $dec_point = '.' , $thousands_sep = ',')." euro <br>".
 " L'imponibile sar&agrave quindi di ".number_format($affitto_lordo_annuo, 2, ',', '.'). " euro sul quale pagherai ".number_format($tasse, 2, $dec_point = '.' , $thousands_sep = ',')." euro di tasse ";
		?>
	</body>
</html>
