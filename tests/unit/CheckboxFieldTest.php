<?php 

namespace BlueprintBuilder;

class CheckboxFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsCheckboxFieldClass()
  {
    $fields = new BlueprintFields();
    $checkboxField = $fields->addCheckbox('Test Checkbox');

    $this->assertInstanceOf(
      CheckboxField::class,
      $checkboxField 
    );
  }

}