<?php

class tratarEntrada
{
    private float $nota1;
    private float $nota2;
    private float $nota3;
    private float $nota4;
    private float $media;

    public function __construct($nota1, $nota2, $nota3, $nota4)
    {
        $nota1 = str_replace(',', '.', $nota1);
        $nota2 = str_replace(',', '.', $nota2);
        $nota3 = str_replace(',', '.', $nota3);
        $nota4 = str_replace(',', '.', $nota4);
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->nota4 = $nota4;
    }

    public function getMedia() : float
    {
        $this->media = ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4)/4.0;
        return $this->media;
    }
    public function aprovacao() : bool
    {
        if($this->media >= 6.0){
            return true;
        }
        return false;
    }

}

?>