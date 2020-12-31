<?php

namespace Exemplo\Caracteristicas;

trait possuiTerraco
{
    public $possuiTerraco;

    public function isPossuiTerraco()
    {
        return $this->possuiTerraco;
    }
}

trait quantidadePavimentos
{
    public $quantidadePavimentos;

    public function getQuantidadePavimentos()
    {
        return $this->quantidadePavimentos;
    }
}

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

use Exemplo\Caracteristicas\possuiTerraco;
use Exemplo\Caracteristicas\quantidadePavimentos;

class Sobrado extends ImovelConstruidoAbstract
{
    use possuiTerraco;
    use quantidadePavimentos;
}

class Predio extends ImovelConstruidoAbstract
{
    use possuiTerraco;
    use quantidadePavimentos;
}

$terreno = new Terreno();
$casa = new Casa();
$sobrado = new Sobrado();
$predio = new Predio();

var_dump($terreno);
var_dump($casa);
var_dump($sobrado);
var_dump($predio);