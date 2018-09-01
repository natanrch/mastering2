<?php

require_once 'global.php';

class FieldInserter
{
	public static function insertWorkWithField($field)
	{
		$fieldId = $field['id'];
		DAO::insertWork('2018-08-23', 777, $fieldId, null);
	}
}