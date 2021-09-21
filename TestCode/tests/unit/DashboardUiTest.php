<?php

class DashboardUiTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $DashboardUi;

	public function setUp():void
	{

		$this->DashboardUi = new \App\Models\DashboardUi;

		
	}

	public function testdraw()
	{

		$this->assertEquals($this->DashboardUi->draw("hello world", 5, "www.abc.com"), "true");
	}

}
?>