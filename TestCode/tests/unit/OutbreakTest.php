<?php

require __DIR__ . '/Db.php';

class OutbreakTest extends \PHPUnit\Framework\TestCase
{
	protected $outbreak;


		public function setUp():void
	{


		$this->outbreak = new \App\Models\Outbreak;


	}



	public function testLoad()
	{
		$dbMock = $this->getMockBuilder(Database::class)
						->setMethods(['fetch'])
						->getMock();

					$outbreaks = 'Covid';	

			$dbMock->method('fetch')->willReturn($outbreaks);		

		$this->assertEquals($this->outbreak->load(), 'All outbreaks');
	}

	public function testDelete()
	{
		$dbMock = $this->getMockBuilder(Database::class)
						->setMethods(['delete'])
						->getMock();

					$outbreaks = 'Covid';	

			$dbMock->method('delete')->willReturn($outbreaks);		

		$this->assertEquals($this->outbreak->delete("1234546"), false);
	}

	public function testGet()
	{
		$dbMock = $this->getMockBuilder(Database::class)
						->setMethods(['fetch'])
						->getMock();

					$outbreaks = 'Covid';	

			$dbMock->method('fetch')->willReturn($outbreaks);		

		$this->assertEquals($this->outbreak->get("1234546" ,"name"), true);
	}


}
?>