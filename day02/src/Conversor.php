<?php
class Conversor
{
    private float $valor;
    //Projeto feito com a cotação do dia 12/10/2021 às 15:30
    public function reaisDolar(float $valor) : float
    {
        if($this->validarPositivo($valor)){
            $this->valor = $valor;
            return round($valor / 5.53, 2);
        }
    }
    public function reaisEuro(float $valor) : float
    {
        if($this->validarPositivo($valor)){
            $this->valor = $valor;
            return round($valor / 6.38, 2);
        }
    }
    public function reaisLibra(float $valor) : float
    {
        if($this->validarPositivo($valor)){
            $this->valor = $valor;
            return round($valor / 7.52, 2);
        }
    }

    private function validarPositivo($valor) : bool
    {
        return $valor > 0;
    }
}


?>