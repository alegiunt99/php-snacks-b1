<!-- 
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

<?php

// creo dei controlli per i parametri da passare

// name
if(isset($_GET['name'])){
    $nameUser = $_GET['name']; 
}else{
    $nameUser = "Name not set in GET Method";
}

// mail
if(isset($_GET['mail'])){
    $mailUser = $_GET['mail']; 
}else{
    $mailUser = "<br>mail not set in GET Method";
}

// age
if(isset($_GET['age'])){
    $ageUser = $_GET['age']; 
}else{
    $ageUser = "<br>Age not set in GET Method";
}


?>

<div>

    <?php
        if(strlen($nameUser) > 3 && strpos($mailUser, '@') && is_numeric($ageUser)){

            echo('<p>');
            echo('Accesso riuscito');
            echo('</p>');
            
        }else{
            
            echo('<p>');
            echo('Accesso negato');
            echo('</p>');

        }
    ?>

</div>