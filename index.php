<?php

    include_once 'php/objeto.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <link rel="icon" type="image/png" href="favicon.ico">
    <title>kata_programación</title>
</head>
<body>
    <div class="container"> 
        <header>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
                <div class="form-group">
                    <input type="number" name="numeros" placeholder="Ingrese los numeros para convertir en formato LCD" autocomplete="off" class="form-control" required>
                    <input type="submit" class="button" value="Convertir">
            </form>
        </header>
        <section>
            <?php 
                if(isset($_POST['numeros'])){
                    $arr = $_POST['numeros'];
                    for($i=0;strlen($arr)>=($i+1);$i++){
                        $numero = new Numero_LCD($arr[$i]);
                        echo "<div class='m'>";
                            echo "<div style='";
                                foreach($numero->c1 as $b){
                                    echo "border-".$b.":".$numero->border;
                                }echo $numero->size;
                            echo "'></div>";

                            echo "<div style='";
                                foreach($numero->c2 as $b){
                                    echo "border-".$b.":".$numero->border;
                                }echo $numero->size;
                                
                                if($numero->num==4 || $numero->num==9){
                                    echo "padding:1px";
                                }
                            echo "'></div>";
                        echo "</div>";  
                    }
                   
                }else{
                   echo '<div class="res">Resultado</div>';
                }
            
            ?>
        </section>
    </div>
   
</body>
</html>