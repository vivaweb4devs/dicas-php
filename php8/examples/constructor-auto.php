<?php
//
// antes
//
//class Automovel{
//    public $placa;
//    public $fabricacao;
//
//    public function __construct($placa = null, $fabricacao = null)
//    {
//        $this->placa = $placa;
//        $this->fabricacao = $fabricacao;
//    }
//}

//
// agora
//
class Automovel
{
    public function __construct(
        public $placa = null,
        public $fabricacao = null
    ) {}
}

$automovel = new Automovel('ABC-1234', 2015);
var_dump($automovel);