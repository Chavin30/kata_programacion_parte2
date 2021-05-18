<?php 

class Numero_LCD{

    public $num, $alto, $ancho; 
    public $c1_i, $c1_f;
    public $c2_i, $c2_f;
    public $c1_p = [];
    public $c2_p = [];
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

    /*public function convertir_numero_1($numero,$alto,$ancho)
    {
        if($alto==1 && $ancho==2)
        {
            if($numero==0)
            {
                $this->c1_i = ['left','top'];
                $this->c1_f = ['right','top'];
                $this->c2_i = ['left','bottom'];
                $this->c2_f = ['right','bottom'];
            }
            elseif($numero==1)
            {
                $this->c1_i = [];
                $this->c1_f = ['right'];
                $this->c2_i = [];
                $this->c2_f = ['right'];
            }
            elseif($numero==2)
            {
                $this->c1_i = ['top'];
                $this->c1_f = ['right','top'];
                $this->c2_i = ['top','left','bottom'];
                $this->c2_f = ['top','bottom'];
            }
            elseif($numero==3)
            {
                $this->c1_i = ['top'];
                $this->c1_f = ['right','top'];
                $this->c2_i = ['top','bottom'];
                $this->c2_f = ['top','bottom','right'];
            }
            elseif($numero==4)
            {
                $this->c1_i = ['left'];
                $this->c1_f = ['right'];
                $this->c2_i = ['top'];
                $this->c2_f = ['top','right'];
            }
            elseif($numero==5)
            {
                $this->c1_i = ['top','left'];
                $this->c1_f = ['top'];
                $this->c2_i = ['top','bottom'];
                $this->c2_f = ['top','right','bottom'];
            }
            elseif($numero==6)
            {
                $this->c1_i = ['top','left'];
                $this->c1_f = ['top'];
                $this->c2_i = ['top','bottom','left'];
                $this->c2_f = ['top','right','bottom'];
            }
            elseif($numero==7)
            {
                $this->c1_i = ['top'];
                $this->c1_f = ['top','right'];
                $this->c2_f = ['right'];
            }
            elseif($numero==8)
            {
                $this->c1_i = ['top','left'];
                $this->c1_f = ['top','right'];
                $this->c2_i = ['bottom','left','top'];
                $this->c2_f = ['bottom','right','top'];
            }
            elseif($numero==9)
            {
                $this->c1_i = ['top','left'];
                $this->c1_f = ['top','right'];
                $this->c2_i = ['top'];
                $this->c2_f = ['right','top'];
            }

        }elseif($alto==2 && $ancho==1)
        {
            if($numero==0)
            {
                $this->c1_i = ['left','top','right'];
                $this->c1_f = ['right','left'];
                $this->c2_i = ['right','left'];
                $this->c2_f = ['left','bottom','right'];
            }
            elseif($numero==1)
            {
                $this->c1_i = ['right'];
                $this->c1_f = ['right'];
                $this->c2_i = ['right'];
                $this->c2_f = ['right'];   
            }
            elseif($numero==2)
            {
                $this->c1_i = ['right','top'];
                $this->c1_f = ['right'];
                $this->c2_i = ['left','top'];
                $this->c2_f = ['left','bottom'];   
            } 
            elseif($numero==3)
            {
                $this->c1_i = ['right','top'];
                $this->c1_f = ['right'];
                $this->c2_i = ['right','top'];
                $this->c2_f = ['right','bottom'];   
            }
            elseif($numero==4)
            {
                $this->c1_i = ['right','left'];
                $this->c1_f = ['right','left'];
                $this->c2_i = ['right','top'];
                $this->c2_f = ['right'];   
            }
            elseif($numero==5)
            {
                $this->c1_i = ['left','top'];
                $this->c1_f = ['left'];
                $this->c2_i = ['right','top'];
                $this->c2_f = ['right','bottom'];   
            }
            elseif($numero==6)
            {
                $this->c1_i = ['left','top'];
                $this->c1_f = ['left'];
                $this->c2_i = ['right','top','left'];
                $this->c2_f = ['right','bottom','left'];   
            }
            elseif($numero==7)
            {
                $this->c1_i = ['right','top'];
                $this->c1_f = ['right'];
                $this->c2_i = ['right'];
                $this->c2_f = ['right'];   
            }
            elseif($numero==8)
            {
                $this->c1_i = ['right','top','left'];
                $this->c1_f = ['right','left'];
                $this->c2_i = ['right','top','left'];
                $this->c2_f = ['right','bottom','left'];   
            }
            elseif($numero==9)
            {
                $this->c1_i = ['right','top','left'];
                $this->c1_f = ['right','left'];
                $this->c2_i = ['right','top'];
                $this->c2_f = ['right'];   
            }       
        }
       

    }*/

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

}

?>