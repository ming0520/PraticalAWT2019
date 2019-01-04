<?php

class Staff{
	protected $sname, $code;

	function __construct(){
		$this->sname = "Alisa";
		$this->code = "A12345";
		
	}

	function setData($sn,$co,$sp){
		$this->sname = $sn;
		$this->code = $co;

	}

	function displayData(){
		echo "Sname : " . $this->sname;
		echo "Code  : " . $this->code;
	}	
}

class Typist extends Staff{
	private $speed;

	function __construct(){
		$this->sname = "Alisa";
		$this->code = "A12345";
		$this->speed = 12;
	}

	function setData($sn,$co,$sp){
		$this->sname = $sn;
		$this->code = $co;
		$this->speed = $sp;
	}

	function displayData(){
		echo "Sname : " . $this->sname . "<br>";
		echo "Code  : " . $this->code . "<br>";
		echo "Speed : " . $this->speed . "<br>";
	}

}

$seb = new Typist();
$seb->setData("Sebastian","B1230",15);
$seb->displayData();