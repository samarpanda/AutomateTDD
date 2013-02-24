<?php

require 'app/Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->calc = new Calculator();
	}

	public function addInputNumbers()
	{
		return [
			[2, 2, 4],
			[6, 4, 10]
		];
	}

	public function substractInputNumbers()
	{
		return [
			[2, 2, 0],
			[6, 4, 2]
		];
	}

	public function multiplyInputNumbers()
	{
		return [
			[2, 2, 4],
			[3, 3, 9]
		];
	}

	public function divideInputNumbers()
	{
		return [
			[2, 2, 1],
			[6, 3, 2]
		];
	}

	/**
	* @dataProvider addInputNumbers
	*/
	public function testAdd($a, $b, $result)
	{
		$this->assertEquals($result, $this->calc->add($a, $b));
	}

	/**
	* @dataProvider substractInputNumbers
	*/
	public function testSubstract($a, $b, $result)
	{
		$this->assertEquals($result, $this->calc->substract($a, $b));
	}

	/**
	* @dataProvider multiplyInputNumbers
	*/
	public function testMultiply($a, $b, $result){
		$this->assertEquals($result, $this->calc->multiply($a, $b));
	}

	/**
	* @dataProvider divideInputNumbers
	*/
	public function testDivide($a, $b, $result)
	{
		$this->assertEquals($result, $this->calc->divide($a, $b));
	}
}