<?php

class testClass
{
	private $testField_1, $testField_2;

	public function showField()
	{
		$this->testField_1 = 'This is';
		$this->testField_2 = 'test';
		echo $this->testField_1 . ' ' . $this->testField_2 . PHP_EOL;
	}
}

$testObject = new TestClass();
$testObject->showField();
