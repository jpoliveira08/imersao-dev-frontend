<?php


class Iteracao
{
    private $arrayFilmes = [
        'Harry Potter e a Pedra Filosofal',
        'Harry Potter e a Câmara Secreta',
        'Harry Potter e o Prisioneiro de Azkaban',
        'Harry Potter e o Cálice de Fogo',
        'Harry Potter e a Ordem da Fênix',
        'Harry Potter e o Enigma do Príncipe',
        'Harry Potter e as Relíquias da Morte: Parte 1',
        'Harry Potter e as Relíquias da Morte: Parte 2'
    ];

    public function getFilmes() : array
    {
        return $this->arrayFilmes;
    }
    public function setFilme(string $filme) : void
    {
        array_push($arrayFilmes, $filme);
    }
}