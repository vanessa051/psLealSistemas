<?php
$cpf = $_POST['cpf'];
$cont = 1;
$totalMultiplica = 0;
$restoDivisao = 0;
$cpfInvertido[] = 0;
$cpfComUmDigito = 0;


//=======================================================================
//	FUNÇÃO FILTRA SOMENTE NUMEROS
//=======================================================================

function filtraNumero($str){
	return preg_replace("/[^0-9]/", "" , $str);
	}
	
	//RECEBE A STRING SOMENTE COM OS NUMREOS
	$cpfFiltrado = filtraNumero($cpf);

	$cpfFormatado = substr($cpfFiltrado, 0, -8);

//=======================================================================
//	CALCULA O PRIMEIRO DIGITO VERIFICADOR
//=======================================================================

//ESSA LINHA VAI PEGAR OS 9 PRIMEIROS DIGITOS E INVERTER
for ($i = strlen($cpfFiltrado) - 3; $i >= 0; $i--) { 	// EXIBE 777444111

	$cont++; //CONTADOR PARA MULTIPLICAR CADA DIGITO POR NUMEROS DECRECENTES A PARTIR DO 2	
	$num = $cont; //RECEBE O VALOR DO CONTADOR	
	$multiplica = ($cpfFiltrado[$i] * $num);//MULTIPLICA CADA DIGITO POR UM NUMERO DECRESCENTE
	$totalMultiplica += $multiplica; //RECEBE A SOMA DA MULTIPLICAÇÃO DOS VALORES

} //FIM DO FOR

$restoDivisao = $totalMultiplica % 11; // RECEBE O RESTO DA DIVISÃO DO VALOR DA SOMA DIVIDO POR 11

//SE O RESULTADO DO RESTO DA DIVISÃO FOR MENOR QUE 2 O PRIMEIRO DIGITO VERIFICADOR SERÁ IGUAL A 0
if ($restoDivisao < 2) {
	$digitoVerificador = 0;

//SE O RESULTADO DO RESTO DA DIVISÃO FOR MAIOR OU IGUAL QUE 2 O PRIMEIRO DIGITO VERIFICADOR SERÁ IGUAL AO RESULTADO DO RESTO DA DIVIDÃO MENOS 11	
} else {
	$digitoVerificador = 11 - $restoDivisao;
}


//=======================================================================
//	CALCULA O SEGUNDO DIGITO VERIFICADOR
//=======================================================================

$cpfNovo[] = ""; //ARRAY QUE VAI RECEBER OS 9 PRIMEIROS DIGITOS DO CPF	
$conti = 1;
$multiplica2Digito = 0;
$totalMultiplica2Digito = 0;
$num2 = 0;
$SegundodigitoVerificador = 0;
$restoDivisao2Digito = 0;
$cpfComDoisDigitos = 0;
$cpfVerificado = 0;


for ($i = 0; $i <= 8; $i++) { //FOR PARA ATRIBUI OS NOVE PRIMEIROS DIGITOS DO CPF PARA O ARRAY
	$cpfNovo[] = $cpfFiltrado[$i];
}

$cpfComUmDigito = (implode("", $cpfNovo) . $digitoVerificador); //CONCATENA OS NOVE PRIMEIROS DIGITOS DO CPF COM O DIGITO VERIFICADR JÁ CALCULADO

for ($i = strlen($cpfComUmDigito) - 1; $i >= 0; $i--) { //ESSA LINHA VAI PEGAR OS 9 PRIMEIROS DIGITOS MAIS O DÍGITO VERIFICADOR E INVERTER

	$conti++; //CONTADOR PARA MULTIPLICAR CADA DIGITO POR NUMEROS DECRECENTES A PARTIR DO 2	
	$num2 = $conti; //RECEBE O VALOR DO CONTADOR	
	$multiplica2Digito = ($cpfComUmDigito[$i] * $num2); //MULTIPLICA CADA DIGITO POR UM NUMERO DECRESCENTE
	$totalMultiplica2Digito += $multiplica2Digito; //RECEBE A SOMA DA MULTIPLICAÇÃO DOS VALORES

} //FIM DO FOR

$restoDivisao2Digito = $totalMultiplica2Digito % 11; // RECEBE O RESTO DA DIVISÃO DO VALOR DA SOMA DIVIDO POR 11

if ($restoDivisao2Digito < 2) { //SE O RESULTADO DO RESTO DA DIVISÃO FOR MENOR QUE 2 O PRIMEIRO DIGITO VERIFICADOR SERÁ IGUAL A 0
	$SegundodigitoVerificador = 0;
	
} else { //SE O RESULTADO DO RESTO DA DIVISÃO FOR MAIOR OU IGUAL QUE 2 O PRIMEIRO DIGITO VERIFICADOR SERÁ IGUAL AO RESULTADO DO RESTO DA DIVIDÃO MENOS 11	
	$SegundodigitoVerificador = 11 - $restoDivisao2Digito;
}

$cpfComDoisDigitos = ($cpfComUmDigito . $SegundodigitoVerificador); //VZRIAVEL QUE CONCATENA O CPF COM O SEGUNDO DÍGITO VERIFICADOR

//=======================================================================
//	VALIDAÇÃO DO CFP
//=======================================================================

if ($cpfFiltrado == $cpfComDoisDigitos) { //SE O CPF DE ENTRADA FOR IGUAL AO CPF CALCULADO ENTÃO EXIBE "CPF VÁLIDO"

	echo '<script language="javascript">alert("Cpf Válido e formatado:  '.substr($cpfFiltrado, 0, -8).".".substr($cpfFiltrado, 3, -5).".".substr($cpfFiltrado, 6, -2)."-".substr($cpfFiltrado, -2).'"); location.href="index.php";</script>';

} else { //SENÃO EXIBE CPF INVÁLIDO

	echo '<script language="javascript">alert("Cpf Inválido!!"); location.href="index.php";</script>';

}