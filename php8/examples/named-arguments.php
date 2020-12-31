<?php

//
// exemplo 1: uso em funções (suas ou do PHP mesmo)
//
function minhaFunc($titulo = null, $subtitulo = null, $descricao = null)
{
    $html = 'Seu código';
    //
    // seu código
    //
    return $html;
}

// antes
echo minhaFunc(null, null, 'Texto apenas com descrição');
echo PHP_EOL;

// agora
echo minhaFunc(descricao: 'Texto apenas com descrição');
echo PHP_EOL;

//
// exemplo 2: uso em métodos de classes
//
class Automovel
{
    // @todo veja sobre construtor automático
    public function __construct($placa = null, $fabricacao = null)
    {
        echo $fabricacao;
    }
}

// antes
$automovel = new Automovel(null, 2015);
var_dump($automovel);

// agora
$automovel = new Automovel(fabricacao: 2015);
var_dump($automovel);