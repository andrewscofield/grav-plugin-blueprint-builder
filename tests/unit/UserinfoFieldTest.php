<?php 

namespace BlueprintBuilder;

class UserinfoFieldTest extends \Codeception\Test\Unit
{
  /**
   * @var \UnitTester
   */
  protected $tester;
  
  protected function _before()
  {
  }

  protected function _after()
  {
  }

  public function testReturnsUserinfoFieldClass()
  {
    $fields = new BlueprintFields();
    $userinfoField = $fields->addUserinfo('Test Userinfo');

    $this->assertInstanceOf(
      UserinfoField::class,
      $userinfoField 
    );

  }

}