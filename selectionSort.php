<?php

echo 'Selection sort';
echo '<br><hr>';


///// Aula PCD - Selection Sort
////  Autor: Jonatas F. Gollmann
///   Data: 30/03/2021
//    Eng. Computação


$aSelec = array(12,5,33,4,66,55,6,23);
$n = count($aSelec);
for ($i=0; $i < $n-1; $i++){
	$min = $i;
	for ($j=$i+1; $j<$n; $j++){
		if ($aSelec[$min] > $aSelec[$j]){
			$min = $j;
		}
	}
	$temp = $aSelec[$i];
	$aSelec[$i]=$aSelec[$min];
	$aSelec[$min]= $temp;
}
echo "<br>Resultado:<br>";
$imp = implode(' | ', $aSelec);
echo "$imp <br>";
print_r($aSelec);

?>