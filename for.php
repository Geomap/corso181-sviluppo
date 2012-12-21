<html>
	<head>
		<title>Ciclo for</title>
		<link rel="stylesheet" type="text/css">
	</head>
	<body>
		<table border="1">
			<?php for($i=1; $i<=10; $i++) { ?>
			<tr>
				<?php for ($j=1; $j<=10; $j++) { ?>
					<td><?php echo $i*$j ?></td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
