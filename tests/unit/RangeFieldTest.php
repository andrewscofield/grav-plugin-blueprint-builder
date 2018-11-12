<?php 

namespace BlueprintBuilder\Field;

class RangeFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsRangeFieldClass()
  {
    $fields = new BlueprintFields();
    $rangeField = $fields->addRange('Test Range');

    $this->assertInstanceOf(
      RangeField::class,
      $rangeField 
    );

  }
}