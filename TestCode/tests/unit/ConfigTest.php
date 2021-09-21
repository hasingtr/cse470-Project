<?php

class ConfigTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $config;

	public function setUp():void
	{

		$this->config = new \App\Models\Config;

		
	}

	public function testGetMonth()
	{

		$this->assertEquals($this->config->getMonth(), 2419200);
	}
	public function testGetWeek()
	{

		$this->assertEquals($this->config->getWeek(), 604800);
	}
}
?>