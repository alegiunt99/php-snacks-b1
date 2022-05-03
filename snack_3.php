<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta -->

<?php

$numbersGroup = [];

$randomNumbers = rand(1, 100)

while (count($numbersGroup) < 15){

    $numbersGroup[] = $randomNumbers;

    echo($numbersGroup);

}

echo($numbersGroup);
?>