<?php

require_once 'global.php';

class SubfieldSelecter
{
	private $subfields = array();
	private $optionsAndSubfields = array();

	public function __construct($subfields)
	{
		$this->subfields = $subfields;
	}

	public function showOptions()
	{
		echo "Choose the subfield:\n";
		$this->defineOptions();
		echo "\n";
	}

	public function chooseSubfield()
	{
		$choosenOption = readline();
		if (array_key_exists($choosenOption, $this->optionsAndSubfields) == false) {
			echo 'Invalid option, please choose again.';
			$this->chooseSubfield();
		}
		return $this->optionsAndSubfields[$choosenOption];
	}
	
	private function defineOptions()
	{
		$subfields = $this->subfields;
		$option = 1;
		foreach ($subfields as $subfield) {
			echo $option." = ".$subfield['name']."    ";
			$this->optionsAndSubfields[$option] = $subfield;
			$option++;
		}
	}


}