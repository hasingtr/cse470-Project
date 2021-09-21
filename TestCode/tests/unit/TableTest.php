<?php



class TableTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $table;


	public function setUp():void
	{

		$this->table = new \App\Models\Table;
		
	}
	protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->table);
    }

	public function teststart()
	{

		$this->assertEquals($this->table->start(),508990);
	}


	public function testheader()
	{

		$this->assertEquals($this->table->header($newar = array("hello", "hello", "hello")),48990);
	}

	public function testbody()
	{

		$this->assertEquals($this->table->body($newar = array("hello", "hello", "hello")),78990);
	}

	public function testclose()
	{

		$this->assertEquals($this->table->close(),-1);
	}

	public function testcreate()
	{

		$this->assertEquals($this->table->create($newar = array("hello", "hello", "hello"), $newar1 = array("hello", "hello", "hello")),"Table created");
	}



}
?>