<?php

class Counter
{
	private $startTime;
	private $diffTime;

	public function countTime()
	{
		$this->startTime = new DateTime();
		echo "Started at: ".$this->startTime->format('Y-m-d H:i:s')."\n";
		echo "Counting work time...\n";

		do {
			$finish = readline("Type 's' to stop the counter: ");
		} while ($finish != 's');

		$endTime = new DateTime();

		$this->diffTime = $endTime->diff($this->startTime, true);

		echo "Hours: ".$this->diffTime->h."\n";
		echo "Minutes: ".$this->diffTime->i."\n";
		echo "Seconds: ".$this->diffTime->s."\n";

		$totalSec = $this->convertToSec($this->diffTime->h, $this->diffTime->i, $this->diffTime->s);

		return $totalSec;
	}

	private function convertToSec($hour, $min, $sec)
	{
		$hoursToSec = $hour * 3600;
		$minToSec = $min * 60;
		$totalSec = $hoursToSec+$minToSec+$sec;
		return $totalSec;
	}
}