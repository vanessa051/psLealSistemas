<?php
//ENTRADA DE DADOS
$entrada =  $_POST["palavra"];;

//FUNÇÃO FILTRA NUMEROS
function filtraNumero($str){
return preg_replace("/[^0-9]/", "" , $str);
}

//RECEBE A STRING SOMENTE COM OS NUMREOS
$filtro = filtraNumero($entrada);

//INVERTE A STRING
//echo strrev($filtro);
echo '<script language="javascript">alert("Número Inverso:  '. strrev($filtro)  .'"); location.href="index.php";</script>';
	

?>