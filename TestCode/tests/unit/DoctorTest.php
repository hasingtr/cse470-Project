<?php



class DoctorTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $doctor;


	public function setUp():void
	{

		$this->doctor = new \App\Models\Doctor;

		
	}
	protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->doctor);
    }


	public function testload()
	{
		$dbMock = $this->getMockBuilder(Database::class)
						->setMethods(['fetch'])
						->getMock();

		$user = 'Doctor';

		$dbMock->method('fetch')->willReturn($user);

		$this->assertEquals($this->doctor->load(), true);
	}
	public function testadd()
	{
		$dbMock = $this->getMockBuilder(Database::class)
						->setMethods(['insert'])
						->getMock();

		$user = 'Doctor';

		$dbMock->method('insert')->willReturn($user);

		$this->assertEquals($this->doctor->add("56498756", "abc", "abc", "abc@gmail.com", "123456789", "male", "doctor"), "Doctor added");
	}


}
?>