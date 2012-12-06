<HTML>
  <HEAD>
  <BODY>
  <H1>TABELLA</H1>
  <table border=1>
      <tr>
	   <td colspan=2 rowspan=2 bgcolor=green>
          <?php
    	   //Assegnazione di una variabile
	   $prestito = 10000;	   
	   $tasso = 5.45;
	   $restituzione = ($prestito/100)*$tasso;  	   
	   echo "Per $prestito euro mi devi restituire $restituzione euro";
	   ?>

	  </td>
          <td colspan=2 rowspan=2 bgcolor=green>
          <?php
    	   //Assegnazione di una variabile
	   $anno_di_nascita = 1964;	   
	   $anno_attuale = date('Y');	   
	   $eta = $anno_attuale - $anno_di_nascita;
	   echo "tu hai la bellezza di $eta anni";
	   ?>

	  </td>
	  <td colspan=2 rowspan=2 bgcolor=green>
	   <?php	   
	   $a = "2";
	   $a = $a*$a;
	   echo $a;
	   ?>
          </td>
          <td>1.3</td>
      </tr>
      <tr>
	<td>2.3</td>
      </tr>
      <tr>
          <td bgcolor=red>3.1 </td>
          <td bgcolor=blue>3.2</td>
          <td>3.3</td>
      </tr>
  </table>
  </BODY>
  </HEAD>
 <HEAD>
  <BODY>
  <table border=1>
      <tr>
	   <td colspan=2 rowspan=2 bgcolor=green>
          <?php
    	   //Assegnazione di una variabile
	   $prestito = 10000;	   
	   $tasso = 5.45;
	   $restituzione = ($prestito/100)*$tasso;  	   
	   echo "Per $prestito euro mi devi restituire $restituzione euro";
	   ?>

	  </td>
          <td colspan=2 rowspan=2 bgcolor=green>
          <?php
    	   //Assegnazione di una variabile
	   $anno_di_nascita = 1964;	   
	   $anno_attuale = date('Y');	   
	   $eta = $anno_attuale - $anno_di_nascita;
	   echo "tu hai la bellezza di $eta anni";
	   ?>

	  </td>
	  <td colspan=2 rowspan=2 bgcolor=green>
	   <?php	   
	   $a = "2";
	   $a = $a*$a;
	   echo $a;
	   ?>
          </td>
          <td>1.3</td>
      </tr>
      <tr>
	<td>2.3</td>
      </tr>
      <tr>
          <td bgcolor=red>3.1 </td>
          <td bgcolor=blue>3.2</td>
          <td>3.3</td>
      </tr>
  </table>
  </BODY>
  </HEAD>
</HTML>
