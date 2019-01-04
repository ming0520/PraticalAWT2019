<?php

class Book{
	var $publisher;

	function setPublisher($par){
		$this->publisher = $par;
	}

	function getPublisher(){
		echo $this->publisher . "<br>";
	}

}

class Novel extends Book{
	function getPublisher(){
		echo 'Novel ';
		echo $this->publisher . "<br>";
	}
}

$nObj1 = new Novel();
$nObj2 = new Novel();

$nObj1->setPublisher ('Times');
$nObj2->setPublisher('Wiley');

$nObj1->getPublisher();
$nObj2->getPublisher();
?>