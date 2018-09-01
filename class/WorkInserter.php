<?php

require_once 'global.php';

class WorkInserter
{
	public static function insert($field, $totalSec)
	{
		$fieldId = $field['id'];
		$date = new DateTime;
		$dateFormatted = $date->format('Y-m-d');
		DAO::insertWork($dateFormatted, $totalSec, $fieldId, null);
	}
}