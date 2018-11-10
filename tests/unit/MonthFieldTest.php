<?php 

namespace BlueprintBuilder;

class MonthFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsMonthFieldClass()
  {
    $fields = new BlueprintFields();
    $monthField = $fields->addMonth('Test Month');

    $this->assertInstanceOf(
      MonthField::class,
      $monthField 
    );

  }
}