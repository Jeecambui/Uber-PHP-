<?php
require_once('registros.php');
require_once('lib/geolocalizacao.inc.php');

$total_registros = count($registros);
echo total de registros: $total_registros<br>;

echo 'total de registros: ' . $total_registros . '<br>';
echo 'total de registros: ' . count($registros) . '<br>';
echo sprintf('total de registros: %d<br>', $total_registros);
echo '<hr>';

$x = 7;
$y = 8;

$menor_dist = XMAX + YMAX;

foreach($registros as $item) {

    $dist= distancia($x,
                     $y,
                     $item['posicao_x'],
                     $item['posicao_y']);

    if ($dist < $menor_dist) {
        $menor_dist = $dist;
    }

    echo $idx.' ';
    echo $item['carro'] . '( ' .$item['carro_ano'] . ') ';
    echo '[' . $item('posicao_x']) . ','. $item['posicao_y'] . ']';
    echo 'distancia: '.$disct;
    echo '<br>';

}

echo '<hr>';
echo "menor distância = ".$menor_dist;