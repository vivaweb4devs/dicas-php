<?php

class Automovel
{
    public $dataEmplacamento;

    public function __construct($placa = null) {
        // ...
    }

    public function setDataEmplacamento(DateTime $dataEmplacamento)
    {
        $this->dataEmplacamento = $dataEmplacamento;
    }

    public function getDataEmplacamento()
    {
        return $this->dataEmplacamento;
    }
}

// exemplo 1: dá certo
// objeto $meuCarro1 possui dataEmplacamento
$meuCarro1 = new Automovel('ABC-1234');
$meuCarro1->setDataEmplacamento(new DateTime());
$dataEmplacamento = $meuCarro1->getDataEmplacamento();
var_dump(
    $dataEmplacamento->format('Y-m-d H:i:s')
);

// exemplo 2: dá erro
// objeto $meuCarro2 está com dataEmplacamento = null
$meuCarro2 = new Automovel('CBA-4321');
$dataEmplacamento = $meuCarro2->getDataEmplacamento();

//
// dava erro e ainda dá se fizer assim
//
// Fatal error: Uncaught Error: Call to a member function format() on null in /var/www/html/nullsafe.php:38 Stack trace: #0 {main} thrown in /var/www/html/nullsafe.php on line 37
//var_dump(
//    $dataEmplacamento->format('Y-m-d H:i:s')
//);

//
// e geralmente contornava-se assim
//
var_dump(
    $dataEmplacamento ? $dataEmplacamento->format('Y-m-d H:i:s') : null
);

//
// e agora com o PHP 8
// dá pra resolver desta forma
//
var_dump(
    $dataEmplacamento?->format('Y-m-d H:i:s')
);
