<?php


class Iteracao
{
    private $arrayFilmes = [
        'Harry Potter e a Pedra Filosofal'=>'/img/filme1.jpg',
        'Harry Potter e a Câmara Secreta'=>'/img/filme2.jpg',
        'Harry Potter e o Prisioneiro de Azkaban'=>'/img/filme3.jpg',
        'Harry Potter e o Cálice de Fogo'=>'/img/filme4.jpg',
        'Harry Potter e a Ordem da Fênix'=>'/img/filme5.jpg',
        'Harry Potter e o Enigma do Príncipe'=>'/img/filme6.jpg',
        'Harry Potter e as Relíquias da Morte: Parte 1'=>'/img/filme7.jpg',
        'Harry Potter e as Relíquias da Morte: Parte 2'=>'/img/filme8.png'
    ];

    public function getFilmes() : array
    {
        return $this->arrayFilmes;
    }

}