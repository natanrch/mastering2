<?php

class Counter
{
	private $diffTime;
	private $totalSec;

	public function getTotalsec()
	{
		return $this->totalSec;
	}

	public function start()
	{
		$this->countTime();
		$this->showTime();
		$this->convertToSec($this->diffTime->h, $this->diffTime->i, $this->diffTime->s);
	}

	private function countTime()
	{
		$startTime = new DateTime();
		echo "Started at: ".$startTime->format('Y-m-d H:i:s')."\n";
		echo "Counting work time...\n";

		do {
			$finish = readline("Type 's' to stop the counter: ");
		} while ($finish != 's');

		$endTime = new DateTime();

		$this->diffTime = $endTime->diff($startTime, true);
	}

	private function showTime()
	{
		echo "Hours: ".$this->diffTime->h."\n";
		echo "Minutes: ".$this->diffTime->i."\n";
		echo "Seconds: ".$this->diffTime->s."\n";
	}

	private function convertToSec($hour, $min, $sec)
	{
		$hoursToSec = $hour * 3600;
		$minToSec = $min * 60;
		$this->totalSec = $hoursToSec+$minToSec+$sec;
	}
}