<?php

require_once 'global.php';

class FieldSelecter
{

	private $optionsAndFields = array();

	public function showOptions()
	{
		echo "Choose the field:\n";
		$this->findFieldsAndDefineOption();
		echo "\n";
		var_dump($this->optionsAndFields);

	}

	private function findFieldsAndDefineOption()
	{
		$fields = DAO::selectFields();
		$option = 1;
		foreach ($fields as $field) {
			echo $option." = ".$field['name']."    ";
			$this->optionsAndFields[$option] = $field['name'];
			$option++;
		}
	}
}