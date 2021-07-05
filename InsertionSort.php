<?php

echo 'Inserção Direta';
echo '<br><hr>';


///// Aula PCD - Insertion Sort
////  Autor: Jonatas F. Gollmann
///   Data: 16/03/2021
//    Eng. Computação

               //0,1,2,3,4,5,6,7
$aInsort = array(5,3,2,4,7,1,0,6);


for($valor = 0; $valor < count($aInsort); $valor++){
	$tempVal = $aInsort[$valor];
	$valor2 =  $valor - 1;

	while($valor2 >= 0 and $aInsort[$valor2] > $tempVal){

		$aInsort[$valor2+1] = $aInsort[$valor2];
		$valor2--;
		$transInsort = implode(' | ', $aInsort);
		print_r($transInsort);
		echo '<br>';
     




    }
    $aInsort[$valor2 + 1] = $tempVal;

}
echo ' '; 
echo "O valor organizado é: <br>";
$novoInsort = implode(' | ', $aInsort);
print_r($novoInsort);
echo '<br>';
?>