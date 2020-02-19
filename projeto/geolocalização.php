<?php


define('XMAX', 20);
define('YMAX', 20);

function distancia($usuario_x, $usuario_y, $carro_x, $carro_y) {
    $distancia = 0;

    //distância horizontal
    $distancia += abs ($usuario_x - $carro_x);

    //distância vertical
    $distancia += abs ($usuario_y - $carro_y);

    return $distancia;
}