<?php

	//ENTRADA DE DADOS
	$frase = $_POST["palavra"];

	//RECEBE NOVA STRING
	$recebe[] = "";

	//ESSE FOR INVERTE E FAZ A CONTAGEM DA STRING
	for ($y = strlen($frase) -1; $y>=0;  $y--) 
		{
			//CONDIÇÃO PARA PASSAGEM DE NUMERO SOMENTE
			if(($frase[$y] == '0') || ($frase[$y] == '1') || ($frase[$y] == '2') || ($frase[$y] == '3') || ($frase[$y] == '4') || ($frase[$y] == '5') || ($frase[$y] == '6') || ($frase[$y] == '7') || ($frase[$y] == '8') || ($frase[$y] == '9')){

				//RECEBE A STRING SOMENTE COM NUMEROS E INVERTIDA
				 $recebe[] = $frase[$y];
				
			}			
		}
		 //EXIBE A STRING NOVA	
		echo '<script language="javascript">alert("Número Inverso:  '. implode("", $recebe)  .'"); location.href="index.php";</script>';
	
?>





