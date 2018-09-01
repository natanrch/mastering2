<?php

require_once 'global.php';
$counter = new Counter;

$counter->start();

//funcion
//DAO::insertWork('2018-08-23', 666, 1, null);

$selecter = new FieldSelecter;
$selecter->showOptions();