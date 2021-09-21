<?php



class HIVTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $hiv;


	public function setUp():void
	{

		$this->hiv = new \App\Models\HIV;

		
	}
	protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->hiv);
    }

	public function testadd()
	{
		$dbMock = $this->getMockBuilder(Database::class)
						->setMethods(['insert'])
						->getMock();

		$patient = 'covid';

		$dbMock->method('insert')->willReturn($patient);
		$this->assertEquals($this->hiv->add($patient, "40", "dhk", "MOD", "commentsss"), 1);
	}

}
?>