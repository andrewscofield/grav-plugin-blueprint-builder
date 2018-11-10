<?php 

namespace BlueprintBuilder;

class PasswordFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsPasswordFieldClass()
  {
    $fields = new BlueprintFields();
    $passwordField = $fields->addPassword('Test Password');

    $this->assertInstanceOf(
      PasswordField::class,
      $passwordField 
    );

  }

}