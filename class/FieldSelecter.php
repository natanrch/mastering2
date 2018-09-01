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
	}

	public function chooseField()
	{
		$choosenOption = readline();
		if (array_key_exists($choosenOption, $this->optionsAndFields) == false) {
			echo 'Invalid option, please choose again.';
			$this->chooseField();
		}
		return $this->optionsAndFields[$choosenOption];
	}

	private function findFieldsAndDefineOption()
	{
		$fields = DAO::selectFields();
		$option = 1;
		foreach ($fields as $field) {
			echo $option." = ".ucfirst($field['name'])."    ";
			$this->optionsAndFields[$option] = $field;
			$option++;
		}
	}


}