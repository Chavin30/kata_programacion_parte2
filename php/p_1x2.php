<?php 
    for($i=0;strlen($arr)>=($i+1);$i++)
    {
        $numero = new Numero_LCD($arr[$i],$alto,$ancho);
        echo "<div class='r'>"; 
            echo "<div>";
            
                echo "<div class='m' style='";
                    foreach($numero->c1_i as $b){
                        echo "border-".$b.":".$numero->border;
                    }echo $numero->size;
                    if($numero->num==4 || $numero->num==9){
                        echo "padding:1px;";
                    }
                echo "'></div>";

            
                echo "<div  class='m' style='";
                    foreach($numero->c2_i as $b){
                        echo "border-".$b.":".$numero->border;
                    }echo $numero->size;
                    
                    if($numero->num==4 || $numero->num==9){
                        echo "padding:1px;";
                    
                        
                    }
                echo "'></div>";
                
            echo "</div>";

            echo "<div>";
                echo "<div class='m' style='";
                    foreach($numero->c1_f as $b){
                        echo "border-".$b.":".$numero->border;
                    }echo $numero->size;
                    if($numero->num==4 || $numero->num==9){
                        echo "padding:1px;";
                    }
                echo "'></div>";

                echo "<div  class='m' style='";
                    foreach($numero->c2_f as $b){
                        echo "border-".$b.":".$numero->border;
                    }echo $numero->size;
                    
                    if($numero->num==4 || $numero->num==9){
                        echo "padding:1px;";
                    }
                echo "'></div>";
            echo "</div>";
        echo "</div>";  
    }

?>

