# dump() com symfony/var-dumper

## Motivação

O var_dump usado muitas vezes para confirmar determinada
estrutura ou dado ao debugar um código pode
ser substituído pelo dump() (componente) que 
deixa tudo com um estilo mais organizado e bonito.

Além disso, alguns objetos que por muitas vezes
são grandes e podem travar no var_dump pelo uso excessivo
de memória com o uso do dump() não travam
pois ele trata bem esta questão.

## Instalação

```
composer require --dev symfony/var-dumper
```

## Uso

Use da mesma forma que usaria o var_dump().

```php
dump($var_ou_objeto);
```