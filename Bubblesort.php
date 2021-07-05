<?php

echo 'Bubble sort';
echo '<br><hr>';


///// Aula PCD - Bubble Sort
////  Autor: Jonatas F. Gollmann
///   Data: 23/03/2021
//    Eng. Computação


                  //  0,1,2, 3,4, 5, 6 ,7
$aBubbleSort = array(12,5,33,4,66,55,6,23,45,1);
$tamA = count($aBubbleSort);
$temp = 0;
$a = implode(' | ', $aBubbleSort);
echo "Antes: $a <br>";
echo '<br>';
print_r($aBubbleSort);
echo '<br>';
echo '<br>';
echo '<br>';

for($i = 0; $i < $tamA; $i++){
	
	for($j = 0; $j < $tamA -1; $j++){

		if ($i != $j){
		
			if($aBubbleSort[$j]>$aBubbleSort[$j+1]){             
		
				$temp = $aBubbleSort[$j+1];                      
				$aBubbleSort[$j+1]=$aBubbleSort[$j];             
				$aBubbleSort[$j]=$temp;                          
			}
		}
		
	}
}
$a = implode(' | ', $aBubbleSort);
echo "Depois: $a <br>";
echo '<br>';
print_r($aBubbleSort);