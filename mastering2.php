<?php

require_once 'global.php';
$counter = new Counter;

$counter->start();
echo $counter->getTotalSec();

//funcion
//DAO::insertWork('2018-08-23', 666, 1, null);

$fields = 