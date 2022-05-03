<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta -->

<?php

// creo un array vuoto
$numbersGroup = [];

// finchè non avrà una lunghezza di 15
while(count($numbersGroup) < 15){

    // creo un numero random da 1 a 100
    $randomNumber = rand(1, 100);
    
    // se il numero random non è nell'array 
    if(!in_array($randomNumber, $numbersGroup)){
        
        // lo aggiungo 
        $numbersGroup[] = $randomNumber;

    }
   
    

}

?>

<pre>
    <?php
       var_dump($numbersGroup);
    ?>
</pre>