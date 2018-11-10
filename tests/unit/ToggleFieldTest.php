<?php 

namespace BlueprintBuilder;

class ToggleFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsToggleFieldClass()
  {
    $fields = new BlueprintFields();
    $toggleField = $fields->addToggle('Test Toggle');

    $this->assertInstanceOf(
      ToggleField::class,
      $toggleField 
    );

  }
}