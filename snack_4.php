<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo. -->

<?php

$paragraph = '
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ipsum lorem,
aliquet sit amet porttitor vitae, posuere a felis. Vestibulum feugiat lorem placerat leo imperdiet,
non tempor mi sodales. Ut eget lorem quis ligula hendrerit ornare. Aliquam at lacinia ipsum. Aenean mi nulla,
bibendum at porttitor lobortis, posuere id libero. Nam vitae lacinia enim. Vestibulum fermentum metus felis,ù
sit amet euismod justo sollicitudin convallis. Donec semper neque maximus, bibendum dolor et, condimentum sapien.
Proin libero eros, convallis eu enim sit amet, rutrum blandit massa. Curabitur condimentum at ante id ornare. In purus elit,
commodo vel vulputate quis, hendrerit quis arcu. Nullam a elit massa. Donec ac aliquet odio, quis vehicula lorem
';

$newParagraph = explode('.', $paragraph);

?>

<h1>Paragrafo principale</h1>

<p>
    <?php
       echo($paragraph);
    ?>
</p>

<h2> Paragrafo suddiviso</h2>
<div>
    <?php
       for($i = 0; $i < count($newParagraph); $i++){

            $keys = array_keys($newParagraph);

            $numberParagraph = $keys[$i];

            echo '<p>';

            echo(($numberParagraph + 1) . ')' . $newParagraph[$numberParagraph]);

            echo '<p>';

       }
    ?>
</div>