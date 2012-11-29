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
			
echo $_POST ["cambio"]*$_POST ["valuta"];
		?>
		<form method="POST">
			<select name="cambio">
			<?php foreach($cambio as $key => $val): ?>
				<option value="<?php echo $val; ?>">
					<?php echo $key; ?>
				</option>
			<?php endforeach; ?>
		</form>

			</select>
			<input type="text" name="valuta" />
			<input type="submit" value="Calcola cambio" />
			
	</body>
</html>
