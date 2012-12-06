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
				<option value="<?php echo $val; ?>">
					<?php echo $key; ?>
				<option>
			<?php endforeach; ?>


			</select>
			<input type="text" name="cambio" />
			<input type="submit" value="Calcola cambio" />
			
			<form method="POST">
			<table>
				<tr>
					<td>
						<option value="EU">EU</option>
						<option value="USD">USD</option>
						<option value="YEN">YEN</option>
						<option value="GBP">GBP</option>
						<option value="CHF">CHF</option>
					</td>
				</tr>
			</table>
		</form>
			
			
	</body>
</html>

