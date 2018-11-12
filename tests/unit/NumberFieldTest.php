<?php 

namespace BlueprintBuilder\Field;

class NumberFieldTest extends \Codeception\Test\Unit
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


  public function testReturnsNumberFieldClass()
  {
    $fields = new BlueprintFields();
    $numberField = $fields->addNumber('Test Number');

    $this->assertInstanceOf(
      NumberField::class,
      $numberField 
    );

  }
}