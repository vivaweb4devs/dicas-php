<?php

namespace Exemplo;

abstract class ImovelAbstract
{
    protected $areaTerreno;

    public function getAreaTerreno()
    {
        return $this->areaTerreno;
    }
}

abstract class ImovelConstruidoAbstract extends ImovelAbstract
{
    protected $areaConstruida;

    public function getAreaConstruida()
    {
        return $this->areaConstruida;
    }
}

class Terreno extends ImovelAbstract
{
}

class Casa extends ImovelConstruidoAbstract
{

}

class Sobrado extends ImovelConstruidoAbstract
{
    protected $quantidadePavimentos;
    protected $possuiTerraco;

    public function getQuantidadePavimentos()
    {
        return $this->quantidadePavimentos;
    }

    public function isPossuiTerraco()
    {
        return $this->possuiTerraco;
    }
}

class Predio extends ImovelAbstract
{
    protected $quantidadePavimentos;
    protected $possuiTerraco;

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