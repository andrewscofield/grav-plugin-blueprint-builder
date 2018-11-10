<?php 

namespace BlueprintBuilder;

class TimeFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsTimeFieldClass()
  {
    $fields = new BlueprintFields();
    $timeField = $fields->addTime('Test Time');

    $this->assertInstanceOf(
      TimeField::class,
      $timeField 
    );

  }
}