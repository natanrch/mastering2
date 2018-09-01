<?php

require_once 'global.php';

class HoursCalculator
{
	public static function calcTotalHours()
	{
		$sum = DAO::selectTotalSeconds();
		$totalSec = $sum['total_sec'];
		$totalHours = $totalSec/3600;
		echo 'Total hours worked: '.floor($totalHours)."\n";
	}

	public static function calcTotalHoursField($field)
	{
		$sum = DAO::selectTotalSecondsField($field);
		$totalSec = $sum['total_sec'];
		$totalHours = $totalSec/3600;
		echo 'Total hours worked at '.$field['name'].': '.floor($totalHours)."\n";

	}

	public static function calcTotalHoursSubfield($subfield)
	{
		$sum = DAO::selectTotalSecondsSubfield($subfield);
		$totalSec = $sum['total_sec'];
		$totalHours = $totalSec/3600;
		echo 'Total hours worked with '.$subfield['name'].': '.floor($totalHours)."\n";
	}
}