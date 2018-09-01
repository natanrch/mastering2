<?php

require_once 'global.php';

class WorkInserter
{
	public static function insert($field, $subfield, $totalSec)
	{
		$fieldId = $field['id'];
		$subfieldId = $subfield['id'];
		$date = new DateTime;
		$dateFormatted = $date->format('Y-m-d');
		DAO::insertWork($dateFormatted, $totalSec, $fieldId, $subfieldId);
	}
}