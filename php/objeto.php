<?php 

class Numero_LCD{

    public $num;
    public $c1;
    public $c2;
    public $border = 'solid 2px black;';
    public $size = 'width:40px;height:40px;';

    function __construct($numero)
    {
        $this->convertir_numero($numero);
        $this->num = $numero;
    }

    public function convertir_numero($numero)
    {
        if($numero==0)
        {
            $this->c1 = ['top','left','right'];
            $this->c2 = ['bottom','left','right'];
        }
        if($numero==1)
        {
            $this->c1 = ['right'];
            $this->c2 = ['right'];
        }
        elseif($numero==2)
        {
            $this->c1 = ['top','right'];
            $this->c2 = ['top','left','bottom'];        
        }
        elseif($numero==3)
        {
            $this->c1 = ['top','right'];
            $this->c2 = ['top','right','bottom'];
        }
        elseif($numero==4)
        {
            $this->c1 = ['left','right'];
            $this->c2 = ['top','right'];
        }
        elseif($numero==5)
        {
            $this->c1 = ['top','left'];
            $this->c2 = ['top','right','bottom'];
        }
        elseif($numero==6)
        {
            $this->c1 = ['top','left'];
            $this->c2 = ['top','left','bottom','right'];
        }
        elseif($numero==7)
        {
            $this->c1 = ['top','right'];
            $this->c2 = ['right'];
        }
        elseif($numero==8)
        {
            $this->c1 = ['top','left','right'];
            $this->c2 = ['top','left','bottom','right'];
        }
        elseif($numero==9)
        {
            $this->c1 = ['top','right','left'];
            $this->c2 = ['top','right','bottom'];
        }

    }

}

?>