<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stile-form.css">
	</head>
	<body>
		<?php
			$cambio = array();
			$cambio['EU'] = 1;
			$cambio['USD'] = 1.28;
			$cambio['YEN'] = 105.37;
			$cambio['GBP'] = 0.80;
			$cambio['CHF'] = 1.20;
			
			
		?>
		<form method="POST">
			Converti 
			<input type="text" name="importo" />
			<select name="cambio_da">
			<?php foreach($cambio as $key => $val): ?>
				<option value="<?php echo $key ?>">
					<?php echo $key ?>
				</option>
			<?php endforeach; ?>
			</select>
			in
			<select name="cambio_a">
			<?php foreach($cambio as $key => $val): ?>
				<option value="<?php echo $key ?>">
					<?php echo $key ?>
				</option>
			<?php endforeach; ?>
			</select>
			<input type="submit" value="Calcola cambio" />
		</form>
		
		<?php			
$conversione = $cambio[$_POST["cambio_a"]]/$cambio [$_POST["cambio_da"]]*$_POST ["importo"];
echo $_POST ["importo"]." ".$_POST["cambio_da"]. " corrispondono a $conversione ".$_POST["cambio_a"];
?>
	</body>
</html>

