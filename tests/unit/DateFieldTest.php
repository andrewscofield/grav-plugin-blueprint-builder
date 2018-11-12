<?php 

namespace BlueprintBuilder\Field;

class DateFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsDateFieldClass()
  {
    $fields = new BlueprintFields();
    $dateField = $fields->addDate('Test Date');

    $this->assertInstanceOf(
      DateField::class,
      $dateField 
    );

  }
}