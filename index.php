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
                    <input type="number" name="alto" placeholder="Alto" autocomplete="off" class="form-control-2" required>
                    <input type="number" name="ancho" placeholder="Ancho" autocomplete="off" class="form-control-2" required>
                    <input type="submit" class="button" value="Convertir">
            </form>
        </header>
        <section>
            <?php 
                if(isset($_POST['numeros'])){
                    $arr = $_POST['numeros'];
                    $alto = $_POST['alto'];
                    $ancho = $_POST['ancho'];
                    if($alto==1 && $ancho==1)
                    {
                       include_once 'php/p_1x1.php';
                    }
                    elseif($alto==1 && $ancho>1)
                    {
                        include_once 'php/p_1x2plus.php';
                    }
                    elseif($alto>1 && $ancho==1)
                    {
                        include_once 'php/p_2plusx1.php';

                    }else{

                        include_once 'php/p_muchos.php';
                    }
                    
                   
                }
            
            ?>
            
        </section>
    </div>
   
</body>
</html>