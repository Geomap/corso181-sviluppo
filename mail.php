<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="form-uno.css">
	</head>
	<body>
		<form id="form1" name="form1" method="post" action="esito.php">
 <p>
 <label for="nome">Nome</label>
 <input type="text" name="nome" id="nome" />
 </p>
 <p>
 <label for="email">Email</label>
 <input type="text" name="email" id="email" />
 </p>
 <p>
 <label for="messaggio">Messaggio</label>
 <textarea name="messaggio" id="messaggio" cols="45" rows="5"></textarea>
 </p>
 <p>
 <input name="privacy" type="checkbox" id="privacy" value="1" />
<label for="privacy">....Testo della Privacy....</label></p>
  <p>
    <label for="captcha">Digita il Codice di verifica</label>
    <input type="text" name="captcha" id="captcha" />
  <img src="captcha.php" alt="captcha image"></p>
<p>
 <input type="submit" name="submit" id="submit" value="Invia Messaggio" />
 </p>
</form>
	</body>
</html>

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
                            $esito=mail("email_azienda@azienda.com","Messaggio di $nome ($email)", $testo_del_messaggio);
                            if ($esito) {
                                echo "Esito: Messaggio inviato, ripsonderemo appena possibile!";
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
