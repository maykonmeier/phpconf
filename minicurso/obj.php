<?php

namespace Phpconf;

class Date
{
	private $dateToday;

	public function __construct()
	{
		$this->dateToday = '10/08/2014';
	}

	public function getDateToday()
	{
		return $this->dateToday;
	}

	public function setDateToday($date)
	{
		$this->dateToday = $date;
	}
}

$date = new Date();
echo $date->getDateToday();
echo '<br />';

$date->setDateToday('12/08/2014');
echo $date->getDateToday();


var_dump($date);