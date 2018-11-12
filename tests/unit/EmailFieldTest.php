<?php 

namespace BlueprintBuilder\Field;

class EmailFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsEmailFieldClass()
  {
    $fields = new BlueprintFields();
    $emailField = $fields->addEmail('Test Email');

    $this->assertInstanceOf(
      EmailField::class,
      $emailField 
    );

  }
}