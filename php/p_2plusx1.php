<?php
    for($i=0;strlen($arr)>=($i+1);$i++)
    {
        $numero = new Numero_LCD($arr[$i],$alto,$ancho);
        echo "<div class='m2x1'>";
            echo "<div class='m' style='";
                foreach($numero->c1_i as $b){
                    echo "border-".$b.":".$numero->border;
                }echo $numero->size;
                
            echo "'></div>";

            //--caja pivote-----------------------------------
            foreach($numero->c1_p as $p){
                echo "<div class='m' style='";
                foreach($p as $b){
                    echo "border-".$b.":".$numero->border;
                }echo $numero->size;
                echo "'></div>";
            }
            //--caja pivote-------------------------------------

            echo "<div  class='m' style='";
                foreach($numero->c1_f as $b){
                    echo "border-".$b.":".$numero->border;
                }echo $numero->size;
                    
            echo "'></div>";
            echo "<div class='m' style='";
                foreach($numero->c2_i as $b){
                    echo "border-".$b.":".$numero->border;
                }echo $numero->size;
                if($numero->num==4 || $numero->num==9){
                    echo "padding-right:2px";
                }
            echo "'></div>";

            //cajas privotes-------------------------------------------
            foreach($numero->c2_p as $p){
                echo "<div class='m' style='";
                foreach($p as $b){
                    echo "border-".$b.":".$numero->border;
                }echo $numero->size;
                if($numero->num==4 || $numero->num==9){
                    echo "padding-right:2px";
                }
                echo "'></div>";
            }
            //cajas privotes-------------------------------------------
            echo "<div  class='m' style='";
                foreach($numero->c2_f as $b){
                    echo "border-".$b.":".$numero->border;
                }echo $numero->size;
                
                if($numero->num==4 || $numero->num==9){
                    echo "padding-right:2px";
                }
            echo "'></div>";
        echo "</div>";  
    } 
?>