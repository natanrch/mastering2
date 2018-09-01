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
		$conn = Connection::getConnection();
        $res = $conn->query($query);
        $fields = $res->fetchAll();
        return $fields;
	}

	public static function selectSubfields($field)
	{
		$query = "SELECT * from subfields where field_id = ".$field['id'];
		$conn = Connection::getConnection();
        $res = $conn->query($query);
        $subfields = $res->fetchAll();
        return $subfields;
	}

	public static function selectTotalSeconds()
	{
		$query = "SELECT sum(sec) as total_sec from works";
        $conn = Connection::getConnection();
        $res = $conn->query($query);
        $sum = $res->fetch();
        return $sum;
	}

	public static function selectTotalSecondsField($field)
	{
		$query = "SELECT sum(sec) as total_sec from works where id_field = ".$field['id'];
        $conn = Connection::getConnection();
        $res = $conn->query($query);
        $sum = $res->fetch();
        return $sum;
	}

	public static function selectTotalSecondsSubfield($subfield)
	{
		$query = "SELECT sum(sec) as total_sec from works where id_subfield = ".$subfield['id'];
        $conn = Connection::getConnection();
        $res = $conn->query($query);
        $sum = $res->fetch();
        return $sum;
	}

}