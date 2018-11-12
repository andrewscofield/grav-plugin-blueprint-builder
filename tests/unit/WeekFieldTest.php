<?php 

namespace BlueprintBuilder\Field;

class WeekFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsWeekFieldClass()
  {
    $fields = new BlueprintFields();
    $weekField = $fields->addWeek('Test Week');

    $this->assertInstanceOf(
      WeekField::class,
      $weekField 
    );

  }

}