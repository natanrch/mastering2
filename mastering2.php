<?php

require_once 'global.php';
$counter = new Counter;

$sec = $counter->countTime();
echo "Segundos: totais".$sec."\n";

// function itens() {
// 	$a1 = 'a1<br>';
// 	$a2 = 'a2<br>';
// 	$a3 = 'a3<br>';

// 	return [$a1, $a2, $a3];

// }

// $itens = itens();
// echo $itens[0];