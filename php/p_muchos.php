<?php

for($x=0;strlen($arr)>=($x+1);$x++)
{
    $numero = new Numero_LCD($arr[$x],$alto,$ancho);
    echo '<div class="r">';
    for($i=0;$i<=($numero->ancho-1);$i++){
        echo '<div>';
        for($y=0;$y<=($numero->alto-1);$y++){
            echo "<div class='m' style='";
            foreach($numero->c1[$i][$y] as $b){
                echo "border-".$b.":".$numero->border;
            }echo $numero->size;
            echo "'></div>";

            echo "<div class='m' style='";
            foreach($numero->c2[$i][$y] as $b){
                echo "border-".$b.":".$numero->border;
            }echo $numero->size;
            echo "'></div>";
        }
        echo '</div>';
    }
    echo '</div>';
}

?>