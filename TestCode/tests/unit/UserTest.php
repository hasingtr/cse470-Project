<?php



class UserTest extends \PHPUnit\Framework\TestCase
{
	//protected function getUserModel(){}

	protected $user;


	public function setUp():void
	{

		$this->user = new \App\Models\User;

		
	}
	protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->user);
    }

	public function testloggedIn()
	{

		$this->assertEquals($this->user->loggedIn(), false);
	}

	public function testlogin()
	{
		$dbMock = $this->getMockBuilder(Database::class)
						->setMethods(['fetch'])
						->getMock();

		$type = 'Doctor';

		$dbMock->method('fetch')->willReturn($type);

		$this->assertEquals($this->user->login("abc@gmail.com", "12345", $type), 1);
	}

	public function testgetToken()
	{

		$this->assertEquals($this->user->getToken(), "");
	}


}
?>