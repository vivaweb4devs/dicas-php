<?php

namespace Exemplo;

class Terreno
{
    protected $areaTerreno;

    public function getAreaTerreno()
    {
        return $this->areaTerreno;
    }
}

class Casa
{
    protected $areaConstruida;
    protected $areaTerreno;

    public function getAreaConstruida()
    {
        return $this->areaConstruida;
    }

    public function getAreaTerreno()
    {
        return $this->areaTerreno;
    }
}

class Sobrado
{
    protected $areaConstruida;
    protected $areaTerreno;
    protected $quantidadePavimentos;
    protected $possuiTerraco;

    public function getAreaConstruida()
    {
        return $this->areaConstruida;
    }

    public function getAreaTerreno()
    {
        return $this->areaTerreno;
    }

    public function getQuantidadePavimentos()
    {
        return $this->quantidadePavimentos;
    }

    public function isPossuiTerraco()
    {
        return $this->possuiTerraco;
    }
}

class Predio
{
    protected $areaConstruida;
    protected $areaTerreno;
    protected $quantidadePavimentos;
    protected $possuiTerraco;

    public function getAreaConstruida()
    {
        return $this->areaConstruida;
    }

    public function getAreaTerreno()
    {
        return $this->areaTerreno;
    }

    public function getQuantidadePavimentos()
    {
        return $this->quantidadePavimentos;
    }

    public function isPossuiTerraco()
    {
        return $this->possuiTerraco;
    }
}

$terreno = new Terreno();
$casa = new Casa();
$sobrado = new Sobrado();
$predio = new Predio();

var_dump($terreno);
var_dump($casa);
var_dump($sobrado);
var_dump($predio);