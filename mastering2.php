<?php

require_once 'global.php';

$counter = new Counter;
$counter->start();
$totalSec = $counter->getTotalSec();


$fieldSelecter = new FieldSelecter;
$fieldSelecter->showOptions();
$field = $fieldSelecter->chooseField();

$subfields = DAO::selectSubfields($field);
if(count($subfields) > 0 ) {
	$subfieldSelecter = new SubfieldSelecter($subfields);
	$subfieldSelecter->showOptions();
	$subfield = $subfieldSelecter->chooseSubfield();
} else {
	$subfield = null;
}

WorkInserter::insert($field, $subfield, $totalSec);
HoursCalculator::calcTotalHours();
HoursCalculator::calcTotalHoursField($field);
if(!is_null($subfield)) HoursCalculator::calcTotalHoursSubfield($subfield);
