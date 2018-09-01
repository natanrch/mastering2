<?php

require_once 'global.php';

class DAO
{
	public static function insertWork($date, $sec, $field, $subField)
	{
		if(!is_null($subField)) {
        	$query = "INSERT INTO works (date, sec, id_field, id_subfield) VALUES ('".$date."', '".$sec."', '".$field."', '".$subField."')";
		} else {
			$query = "INSERT INTO works (date, sec, id_field) VALUES ('".$date."', '".$sec."', '".$field."')";
		}
        $conn = Connection::getConnection();
        $conn->exec($query);
	}

	public static function selectFields()
	{
		$query = "SELECT * from fields";
        $res = $conn->query($query);
        $fields = $res->fetchAll();
        return $fields;
	}

}