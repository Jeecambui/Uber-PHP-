<?php
echo 'total de registros: ' . $total_registros . '<br>';
echo 'total de registros: ' . count($registros) . '<br>';
echo sprintf('total de registros: %d<br>', $total_registros);
echo '<hr>';

$x = 2;
$y = 10;

foreach($registros as $item) {

    $dist= distancia($x,
                     $y,
                     $item['posicao_x'],
                     $item['posicao_y']);

    echo $item['carro'] . '( ' .$item['carro_ano'] . ') ';
    echo '[' . $item('posicao_x']) . ','. $item['posicao_y'] . ']';
    echo '<br>';

    //echo "{$item['carro']} ({$item['posicao_y]})";
    //echo '<br>';

}