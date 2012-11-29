<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="stile-form.css">
	</head>
	<body>
		
		<?php
			var_dump ($_POST);
			$cambio = array();
			$cambio['EU'] = 1;
			$cambio['USD'] = 1.28;
			$cambio['YEN'] = 105.37;
			$cambio['GBP'] = 0.80;
			$cambio['CHF'] = 1.20;
			
			


		?>
		<form method="POST">
			<select name="cambio">
			<?php foreach($cambio as $key => $val): ?>
				<option value="<?php echo $key; ?>">
					<?php echo $key; ?>
				</option>
			<?php endforeach; ?>


			</select>
			<input type="text" name="valuta" />
			<input type="submit" value="Calcola cambio" />
			</form>

<?php			
$conversione = $cambio [$_POST["cambio"]]*$_POST ["valuta"];
echo $_POST ["valuta"]." euri equivalgono a $conversione ".$_POST["cambio"];
?>
	</body>
</html>
