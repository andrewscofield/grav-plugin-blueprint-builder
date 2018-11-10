<?php 

namespace BlueprintBuilder;

class DisplayFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsDisplayFieldClass()
  {
    $fields = new BlueprintFields();
    $displayField = $fields->addDisplay('Test Display');

    $this->assertInstanceOf(
      DisplayField::class,
      $displayField 
    );

  }
}