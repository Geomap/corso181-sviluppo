<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css">
	</head>
	<body>
<?php
 
function isValidEmail($email){
    return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}
 
if (isset($_POST['submit'])) {
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $messaggio=$_POST['messaggio'];
    $privacy=$_POST['privacy'];
    if (!empty($nome)) {
        if (!empty($email)) {
            if (isValidEmail($email)) {
                if (!empty($messaggio)) {
                    if ($privacy==1) {
                        if($_SESSION["captcha"]==$_POST["captcha"]) {
                            $testo_del_messaggio="Nome: $nome\n";
                            $testo_del_messaggio.="Email: $email\n";
                            $testo_del_messaggio.="Messaggio: $messaggio\n";
                            $testo_del_messaggio.="Privacy: $privacy\n";
                            $esito=mail("paolo@GEOMAP","Messaggio di $nome ($email)", $testo_del_messaggio);
                            if ($esito) {
                                echo "Esito: Messaggio inviato, risponderemo appena possibile!";
                            } else {
                                echo "Errore: Non &egrave; stato possibile inviare il messaggio!";
                            }
                        } else {
                        echo "Errore: Il Codice di verifica non &egrave; corretto!";
                        }
                    } else {
                        echo "Errore: Bisogna dare il consenso sulla Privacy!";
                    }
                } else {
                    echo "Errore: Manca il Messaggio!";
                }
            } else {
                echo "Errore: Formato Email non corretto!";
            }
        } else {
            echo "Errore: Manca un indirizzo Email!";
        }
    } else {
        echo "Errore: Manca il Nome!";
    }
} else {
    echo "Errore: Modulo di invio non valido!";
}
 
?>
	</body>
</html>
