<?php 

class Numero_LCD{

    public $num, $alto, $ancho; 
    public $c1_i, $c1_f;
    public $c2_i, $c2_f;
    public $c1_p = [];
    public $c2_p = [];
    public $c1=[];
    public $c2=[];
    public $border = 'solid 2px black;';
    public $size = 'width:20px;height:20px;';

    function __construct($numero, $alto, $ancho)
    {   
        $this->num = $numero;
        $this->alto = $alto;
        $this->ancho = $ancho;

        if($alto==1 && $ancho==1){
            $this->convertir_numero($numero); 
        }elseif(($alto==1 && $ancho>1) || ($alto>1 && $ancho==1)){
            $this->convertir_numero_1($numero,$alto,$ancho); 
        }else{
            $this->convertir_numero_2($numero,$alto,$ancho); 
        }
    }

    public function convertir_numero($numero)
    {
        if($numero==0)
        {
            $this->c1_i = ['top','left','right'];
            $this->c2_i = ['bottom','left','right'];
        }
        if($numero==1)
        {
            $this->c1_i = ['right'];
            $this->c2_i = ['right'];
        }
        elseif($numero==2)
        {
            $this->c1_i = ['top','right'];
            $this->c2_i = ['top','left','bottom'];        
        }
        elseif($numero==3)
        {
            $this->c1_i = ['top','right'];
            $this->c2_i = ['top','right','bottom'];
        }
        elseif($numero==4)
        {
            $this->c1_i = ['left','right'];
            $this->c2_i = ['top','right'];
        }
        elseif($numero==5)
        {
            $this->c1_i = ['top','left'];
            $this->c2_i = ['top','right','bottom'];
        }
        elseif($numero==6)
        {
            $this->c1_i = ['top','left'];
            $this->c2_i = ['top','left','bottom','right'];
        }
        elseif($numero==7)
        {
            $this->c1_i = ['top','right'];
            $this->c2_i = ['right'];
        }
        elseif($numero==8)
        {
            $this->c1_i = ['top','left','right'];
            $this->c2_i = ['top','left','bottom','right'];
        }
        elseif($numero==9)
        {
            $this->c1_i = ['top','right','left'];
            $this->c2_i = ['top','right','bottom'];
        }
    }

    // 1 x muchos || muchos x 1
    public function convertir_numero_1($numero,$alto,$ancho)
    {
        if($alto==1 && $ancho>1)
        {
            if($numero==0)
            {
                $this->c1_i = ['left','top'];
                $this->c1_f = ['right','top'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array('top'));
                }


                $this->c2_i = ['left','bottom'];
                $this->c2_f = ['right','bottom'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array('bottom'));
                }
            }

            if($numero==1)
            {
                $this->c1_i = [];
                $this->c1_f = ['right'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array(''));
                }

                $this->c2_i = [];
                $this->c2_f = ['right'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array(''));
                }
            }

            if($numero==2)
            {
                $this->c1_i = ['top'];
                $this->c1_f = ['right','top'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array('top'));
                }

                $this->c2_i = ['top','left','bottom'];
                $this->c2_f = ['top','bottom'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array('bottom','top'));
                }
            }
            if($numero==3)
            {
                $this->c1_i = ['top'];
                $this->c1_f = ['right','top'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array('top'));
                }

                $this->c2_i = ['top','bottom'];
                $this->c2_f = ['top','bottom','right'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array('bottom','top'));
                }
            }

            if($numero==4)
            {
                $this->c1_i = ['left'];
                $this->c1_f = ['right'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array(''));
                }

                $this->c2_i = ['top'];
                $this->c2_f = ['top','right'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array('top'));
                }
            }

            if($numero==5)
            {
                $this->c1_i = ['top','left'];
                $this->c1_f = ['top'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array('top'));
                }

                $this->c2_i = ['top','bottom'];
                $this->c2_f = ['top','right','bottom'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array('top','bottom'));
                }
            }

            elseif($numero==6)
            {
                $this->c1_i = ['top','left'];
                $this->c1_f = ['top'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array('top'));
                }

                $this->c2_i = ['top','bottom','left'];
                $this->c2_f = ['top','right','bottom'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array('top','bottom'));
                }
            }
            elseif($numero==7)
            {
                $this->c1_i = ['top'];
                $this->c1_f = ['top','right'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array('top'));
                }

                $this->c2_i = [''];
                $this->c2_f = ['right'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array(''));
                }
            }
            elseif($numero==8)
            {
                $this->c1_i = ['top','left'];
                $this->c1_f = ['top','right'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array('top'));
                }

                $this->c2_i = ['bottom','left','top'];
                $this->c2_f = ['bottom','right','top'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array('top','bottom'));
                }
            }
            elseif($numero==9)
            {
                $this->c1_i = ['top','left'];
                $this->c1_f = ['top','right'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c1_p,array('top'));
                }

                $this->c2_i = ['top'];
                $this->c2_f = ['right','top'];
                for($i=0;$i<($ancho-2);$i++){
                    array_push($this->c2_p,array('top'));
                }
            }
        }elseif($alto>1 && $ancho==1)
        {
            if($numero==0)
            {
                $this->c1_i = ['left','top','right'];
                $this->c1_f = ['right','left'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('left','right'));
                }
                $this->c2_i = ['right','left'];
                $this->c2_f = ['left','bottom','right'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('left','right'));
                }
            }
            elseif($numero==1)
            {
                $this->c1_i = ['right'];
                $this->c1_f = ['right'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('right'));
                }

                $this->c2_i = ['right'];
                $this->c2_f = ['right'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('right'));
                }   
            }
            elseif($numero==2)
            {
                $this->c1_i = ['right','top'];
                $this->c1_f = ['right'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('right'));
                }

                $this->c2_i = ['left','top'];
                $this->c2_f = ['left','bottom']; 
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('left'));
                }  
            } 
            elseif($numero==3)
            {
                $this->c1_i = ['right','top'];
                $this->c1_f = ['right'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('right'));
                }

                $this->c2_i = ['right','top'];
                $this->c2_f = ['right','bottom'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('right'));
                }   
            }
            elseif($numero==4)
            {
                $this->c1_i = ['right','left'];
                $this->c1_f = ['right','left'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('right','left'));
                }
                $this->c2_i = ['right','top'];
                $this->c2_f = ['right'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('right'));
                }   
            }
            elseif($numero==5)
            {
                $this->c1_i = ['left','top'];
                $this->c1_f = ['left'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('left'));
                }
                $this->c2_i = ['right','top'];
                $this->c2_f = ['right','bottom'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('right'));
                }    
            }
            elseif($numero==6)
            {
                $this->c1_i = ['left','top'];
                $this->c1_f = ['left'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('left'));
                }
                $this->c2_i = ['right','top','left'];
                $this->c2_f = ['right','bottom','left'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('left','right'));
                }   
            }
            elseif($numero==7)
            {
                $this->c1_i = ['right','top'];
                $this->c1_f = ['right'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('right'));
                }
                $this->c2_i = ['right'];
                $this->c2_f = ['right'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('right'));
                }    
            }
            elseif($numero==8)
            {
                $this->c1_i = ['right','top','left'];
                $this->c1_f = ['right','left'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('left','right'));
                }
                $this->c2_i = ['right','top','left'];
                $this->c2_f = ['right','bottom','left'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('left','right'));
                }   
            }
            elseif($numero==9)
            {
                $this->c1_i = ['right','top','left'];
                $this->c1_f = ['right','left'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c1_p,array('left','right'));
                }
                $this->c2_i = ['right','top'];
                $this->c2_f = ['right'];
                for($i=0;$i<($alto-2);$i++){
                    array_push($this->c2_p,array('right'));
                }    
            }       
        }

    }

    // muchos x muchos
    public function convertir_numero_2($numero,$alto,$ancho)
    {
        $par = $alto % 2;

        if($numero==0)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){
                    
                    //esquina inicial
                    if($i==0 && $y==0){
                        $this->c1[$i][$y] = ['top','left'];
                        $this->c2[$i][$y] = ['left'];
                    }
                    //esquina superior derecha
                    elseif($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['top','right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //orilla superior
                    elseif(($i>0 && $i<($ancho-1)) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //orilla izquierda
                    elseif($i==0 && ($y>0 && $y<($alto-1))){
                        $this->c1[$i][$y] = ['left'];
                        $this->c2[$i][$y] = ['left'];
                    }
                    //orilla derecha
                    elseif($i==($ancho-1) && ($y>0 && $y<($alto-1))){
                        $this->c1[$i][$y] = ['right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //orilla inferior
                    elseif(($i>0 && $i<($ancho-1)) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c1[$i][$y] = ['right'];
                        $this->c2[$i][$y] = ['bottom','right'];
                    }
                    //esquina inferior izquierda
                    elseif($i==0  && $y==($alto-1)){
                        $this->c1[$i][$y] = ['left'];
                        $this->c2[$i][$y] = ['bottom','left'];
                    }                    
                }
            }
        }

        if($numero==1)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){
                    
                    
                    //esquina superior derecha
                    if($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //orilla derecha
                    elseif($i==($ancho-1) && ($y>0 && $y<($alto-1))){
                        $this->c1[$i][$y] = ['right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c1[$i][$y] = ['right'];
                        $this->c2[$i][$y] = ['right'];
                    }                   
                }
            }
        }

        if($numero==2)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){
                    
                    //esquina inicial
                    if($i==0 && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //esquina superior derecha
                    elseif($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['top','right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //orilla superior
                    elseif(($i>0 && $i<($ancho-1)) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //orilla inferior
                    elseif(($i>0 && $i<($ancho-1)) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom'];
                    }
                    //esquina inferior izquierda
                    elseif($i==0  && $y==($alto-1)){
                        $this->c1[$i][$y] = ['left'];
                        $this->c2[$i][$y] = ['bottom','left'];
                    }

                    if($par==0){
                        //segunda mitad orilla izquierda
                        if($i==0 && ($y>($alto/2) && $y<(($alto)-1))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];
                        }
                        //primera mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top','left'];

                            if($alto>2){
                                $this->c2[$i][$y] = ['left'];
                            }
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                   
                    }else{
                        //segunda mitad orilla izquierda
                        if($i==0 && ($y>=(($alto-1)/2) && $y<($alto)-1)){
                            if($y!=($alto-1)/2){
                                $this->c1[$i][$y] = ['left'];
                                $this->c2[$i][$y] = ['left'];
                            }else{
                                $this->c1[$i][$y] = ['bottom'];
                                $this->c2[$i][$y] = ['left'];
                            }
                           
                        }
                        //primera mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>0 && $y<($alto-1)/2)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','right'];
                            
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                        }
                    }
                       
                }
            }
        }
        if($numero==3)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){
                    
                    //esquina inicial
                    if($i==0 && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //esquina superior derecha
                    elseif($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['top','right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //orilla superior
                    elseif(($i>0 && $i<($ancho-1)) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //orilla inferior
                    elseif(($i>0 && $i<($ancho-1)) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom','right'];
                        $this->c1[$i][$y] = ['right'];
                    }
                    //esquina inferior izquierda
                    elseif($i==0  && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom'];
                    }

                    if($par==0){
                        //primera mitad orilla derecha
                        if($i==($ancho-1) && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==($ancho-1) && $y>=($alto/2) && $y<(($alto)-1)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];

                            if($y==($alto/2)){
                                $this->c1[$i][$y] = ['right','top'];
                            }
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto/2))){
                            if($alto==2){
                                $this->c1[$i][$y] = ['top','right'];
                            }else{
                                $this->c1[$i][$y] = ['top']; 
                            }
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                   
                    }else{
                        //primera mitad orilla derecha
                        if($i==($ancho-1) && ($y>0 && $y<($alto-1)/2)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //segunda mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>=(($alto+1)/2) && $y<($alto)-1)){
                            if($y!=($alto-1)/2){
                                $this->c1[$i][$y] = ['right'];
                                $this->c2[$i][$y] = ['right'];
                            }else{
                                $this->c1[$i][$y] = ['bottom'];
                                $this->c2[$i][$y] = ['right'];
                            }
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','right'];
                            $this->c2[$i][$y] = ['right'];
                            
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                        }
                    }
                       
                }
            }
        }

        if($numero==4)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){
                    
                    //esquina inicial
                    if($i==0 && $y==0){
                        $this->c1[$i][$y] = ['left'];
                        $this->c2[$i][$y] = ['left'];
                    }
                    //esquina superior derecha
                    elseif($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['right'];
                        $this->c1[$i][$y] = ['right'];
                    }
                    //esquina inferior izquierda
                    elseif($i==0  && $y==($alto-1)){
                        
                    }

                    if($par==0){
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];
                        }
                        //primera mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==($ancho-1) && $y>=($alto/2) && $y<(($alto)-1)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];

                            if($y==($alto/2)){
                                $this->c1[$i][$y] = ['right','top'];
                            }
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];    
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto/2))){
                            if($alto==2){
                                $this->c1[$i][$y] = ['top','right'];
                            }else{
                                $this->c1[$i][$y] = ['top']; 
                            }
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                    }else{
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)-1))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left']; 
                        }
                        //primera mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>0 && $y<($alto-1)/2)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //segunda mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>=(($alto+1)/2) && $y<($alto)-1)){
                            if($y!=($alto-1)/2){
                                $this->c1[$i][$y] = ['right'];
                                $this->c2[$i][$y] = ['right'];
                            }else{
                                $this->c1[$i][$y] = ['bottom'];
                                $this->c2[$i][$y] = ['right'];
                            }
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','left'];
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                        }
                    }
                       
                }
            }
        }

        if($numero==5)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){

                    //esquina inicial
                    if($i==0 && $y==0){
                        $this->c1[$i][$y] = ['left','top'];
                        $this->c2[$i][$y] = ['left'];
                    }
                    //esquina superior derecha
                    elseif($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //orilla superior
                    elseif(($i>0 && $i<($ancho-1)) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //orilla inferior
                    elseif(($i>0 && $i<($ancho-1)) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['right','bottom'];
                        $this->c1[$i][$y] = ['right'];
                    }
                    //esquina inferior izquierda
                    elseif($i==0  && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom'];
                    }

                    if($par==0){
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==($ancho-1) && $y>=($alto/2) && $y<(($alto)-1)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];

                            if($y==($alto/2)){
                                $this->c1[$i][$y] = ['right','top'];
                            }
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                            
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto/2))){
                            if($alto==2){
                                $this->c1[$i][$y] = ['top','right'];
                            }else{
                                $this->c1[$i][$y] = ['top']; 
                            }
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                   
                    }else{
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)-1))){   
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];   
                        }
                        //segunda mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>=(($alto+1)/2) && $y<($alto)-1)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right']; 
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','left'];
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                            $this->c2[$i][$y] = ['right'];  
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                        }
                    }
                       
                }
            }
        }
        if($numero==6)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){

                    //esquina inicial
                    if($i==0 && $y==0){
                        $this->c1[$i][$y] = ['left','top'];
                        $this->c2[$i][$y] = ['left'];
                    }
                    //esquina superior derecha
                    elseif($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //orilla superior
                    elseif(($i>0 && $i<($ancho-1)) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //orilla inferior
                    elseif(($i>0 && $i<($ancho-1)) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['right','bottom'];
                        $this->c1[$i][$y] = ['right'];
                    }
                    //esquina inferior izquierda
                    elseif($i==0  && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom','left'];
                        $this->c1[$i][$y] = ['left'];
                    }

                    if($par==0){
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==0 && ($y>($alto/2) && $y<(($alto)-1))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==($ancho-1) && $y>=($alto/2) && $y<(($alto)-1)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];

                            if($y==($alto/2)){
                                $this->c1[$i][$y] = ['right','top'];
                            }
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto/2))){
                            
                            if($alto==2){
                                $this->c1[$i][$y] = ['top','left'];
                                $this->c2[$i][$y] = ['left','bottom'];
                            }else{
                                $this->c1[$i][$y] = ['top','left'];
                                $this->c2[$i][$y] = ['left'];
                            }
                            
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top','right'];
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                    }else{
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)-1))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];   
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==0 && ($y>(($alto-1)/2) && $y<($alto)-1)){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left']; 
                        }
                        //segunda mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>=(($alto+1)/2) && $y<($alto)-1)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];  
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','left'];
                            $this->c2[$i][$y] = ['left'];
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                            $this->c2[$i][$y] = ['right'];    
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                        }
                    }
                       
                }
            }
        }

        if($numero==7)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){
                    
                    //esquina inicial
                    if($i==0 && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //esquina superior derecha
                    elseif($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['top','right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //orilla superior
                    elseif(($i>0 && $i<($ancho-1)) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //orilla derecha
                    elseif($i==($ancho-1) && ($y>0 && $y<($alto-1))){
                        $this->c1[$i][$y] = ['right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c1[$i][$y] = ['right'];
                        $this->c2[$i][$y] = ['right'];
                    }                   
                }
            }
        }
        if($numero==8)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){

                    //esquina inicial
                    if($i==0 && $y==0){
                        $this->c1[$i][$y] = ['left','top'];
                        $this->c2[$i][$y] = ['left'];
                    }
                    //esquina superior derecha
                    elseif($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['top','right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //orilla superior
                    elseif(($i>0 && $i<($ancho-1)) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //orilla inferior
                    elseif(($i>0 && $i<($ancho-1)) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['right','bottom'];
                        $this->c1[$i][$y] = ['right'];
                    }
                    //esquina inferior izquierda
                    elseif($i==0  && $y==($alto-1)){
                        $this->c2[$i][$y] = ['bottom','left'];
                        $this->c1[$i][$y] = ['left'];
                    }

                    if($par==0){
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==0 && ($y>($alto/2) && $y<(($alto)-1))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];
                        }
                        //primera mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==($ancho-1) && $y>=($alto/2) && $y<(($alto)-1)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];

                            if($y==($alto/2)){
                                $this->c1[$i][$y] = ['right','top'];
                            }
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto/2))){
                            
                            if($alto==2){
                                $this->c1[$i][$y] = ['top','left'];
                                $this->c2[$i][$y] = ['left','bottom'];
                            }else{
                                $this->c1[$i][$y] = ['top','left'];
                                $this->c2[$i][$y] = ['left'];
                            }
                            
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top','right'];
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                   
                    }else{
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)-1))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];     
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==0 && ($y>(($alto-1)/2) && $y<($alto)-1)){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left']; 
                        }
                        //primera mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>0 && $y<($alto-1)/2)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //segunda mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>=(($alto+1)/2) && $y<($alto)-1)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right']; 
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','left'];
                            $this->c2[$i][$y] = ['left'];
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','right'];
                            $this->c2[$i][$y] = ['right'];  
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                        }
                    }
                       
                }
            }
        }
        
        if($numero==9)
        {
            for($i=0;$i<=($ancho-1);$i++){
                for($y=0;$y<=($alto-1);$y++){

                    //esquina inicial
                    if($i==0 && $y==0){
                        $this->c1[$i][$y] = ['left','top'];
                        $this->c2[$i][$y] = ['left'];
                    }
                    //esquina superior derecha
                    elseif($i==($ancho-1) && $y==0){
                        $this->c1[$i][$y] = ['top','right'];
                        $this->c2[$i][$y] = ['right'];
                    }
                    //orilla superior
                    elseif(($i>0 && $i<($ancho-1)) && $y==0){
                        $this->c1[$i][$y] = ['top'];
                    }
                    //esquina inferior derecha
                    elseif($i==($ancho-1) && $y==($alto-1)){
                        $this->c2[$i][$y] = ['right'];
                        $this->c1[$i][$y] = ['right'];
                    }

                    if($par==0){
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];
                            
                        }
                        //primera mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>0 && $y<(($alto/2)))){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //segunda mitad orilla izquierda
                        elseif($i==0 && $y>=($alto/2) && $y<(($alto)-1)){
                            if($y==($alto/2)){
                                $this->c1[$i][$y] = ['top'];
                            }
                        }
                        //segunda mitad orilla derecha
                        elseif($i==($ancho-1) && $y>=($alto/2) && $y<(($alto)-1)){
                            if($y==($alto/2)){
                                $this->c1[$i][$y] = ['top','right'];
                                $this->c2[$i][$y] = ['right'];
                            }else{
                                $this->c1[$i][$y] = ['right'];
                                $this->c2[$i][$y] = ['right'];
                            }
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top','right'];
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto/2))){
                            $this->c1[$i][$y] = ['top'];
                        }
                   
                    }else{
                        //primera mitad orilla izquierda
                        if($i==0 && ($y>0 && $y<(($alto/2)-1))){
                            $this->c1[$i][$y] = ['left'];
                            $this->c2[$i][$y] = ['left'];     
                        }
                        //primera mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>0 && $y<($alto-1)/2)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right'];
                        }
                        //segunda mitad orilla derecha
                        elseif($i==($ancho-1) && ($y>=(($alto+1)/2) && $y<($alto)-1)){
                            $this->c1[$i][$y] = ['right'];
                            $this->c2[$i][$y] = ['right']; 
                        }
                        //esquina izquierda mitad
                        elseif($i==0 && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','left'];
                        }
                        //esquina derecha mitad
                        elseif($i==($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom','right'];
                            $this->c2[$i][$y] = ['right'];  
                        }
                        //orilla mitad
                        elseif($i>0 && $i<($ancho-1) && $y==(($alto-1)/2)){
                            $this->c1[$i][$y] = ['bottom'];
                        }
                    }
                       
                }
            }
        }
        
        

    }

}

?>