<?php 

namespace BlueprintBuilder;

class RadioFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsRadioFieldClass()
  {
    $fields = new BlueprintFields();
    $radioField = $fields->addRadio('Test Radio');
  
    $this->assertInstanceOf(
      RadioField::class,
      $radioField 
    );
  
  }
}