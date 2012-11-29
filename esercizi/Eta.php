<html>
	<head>
		<title></title>
	</head>
	<body>
		Et&agrave; =
		<?php 

//data attuale 
$data_attuale_Y = date("Y"); 
$data_attuale_m = date("m"); 
$data_attuale_d = date("d"); 


//data di nascita 
$data_nascita_Y = $_POST['anno']; 
$data_nascita_m = $_POST['mese']; 
$data_nascita_d = $_POST['giorno']; 

//calcolo l'eta 
$calc_eta = $data_attuale_Y - $data_nascita_Y; 

//calcolo l'età esatta tenedo conto del mese e del giorno

if ($data_attuale_m <= $data_nascita_m AND $data_attuale_d < $data_nascita_d) {
$eta = $calc_eta -1;
} 

else {
$eta = $calc_eta;
}

//stampo a video
echo "$eta";

?>
		<form method="POST">
			<table>
				<tr>
					<td>
						<label for="giorno">GIORNO:</label>
					</td>
					<td>
						<input type="text" name="giorno"  />
					</td>
				</tr>	
				<tr>
					<td>
						<label for="mese">MESE:</label>
					</td>
					<td>
						<input type="text" name="mese"  />
					</td>
				</tr>	
				<tr>
					<td>
						<label for="anno">ANNO:</label>
					</td>
					<td>
						<input type="text" name="anno"  />
					</td>
				</tr>	
				<tr>
					<td>
						<input type="submit" value="Calcola" />
					</td>
				</tr>
			</table>
		</form>
		
	</body>
</html>

