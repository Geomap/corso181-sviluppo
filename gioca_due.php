<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css">
	</head>
	<body>
Benvenuto <?php echo $_POST['nomeutente']?><br>
				<?php
		$pl = rand(1,6);
		$cp = rand(1,6);
		if($pl > $cp){
			echo $_POST['nomeutente']." $pl Computer $cp ";?>
		<br>
		<?php
			echo "Complimenti " .$_POST['nomeutente']." HAI VINTO ";
		} 
		if($pl == $cp) {
			echo $_POST['nomeutente']." $pl Computer $cp ";?>
		<br>
		<?php
			echo "Hai pareggiato " .$_POST['nomeutente']." Vuoi rigiocare? ";
		} 
		if($pl < $cp) {
			echo $_POST['nomeutente']." $pl Computer $cp ";?>
		<br>
		<?php
			echo "Peccato hai perso " .$_POST['nomeutente']." Vuoi rigiocare? ";
		}
		?>
<br><br><a href="gioca_due.php">RIGIOCA</a>
	</body>
</html>
