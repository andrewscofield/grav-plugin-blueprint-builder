<?php 

namespace BlueprintBuilder\Field;

class ConditionalFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsConditionalFieldClass()
  {
    $fields = new BlueprintFields();
    $conditionalField = $fields->addConditional('Test Conditional');

    $this->assertInstanceOf(
      ConditionalField::class,
      $conditionalField 
    );

  }
}