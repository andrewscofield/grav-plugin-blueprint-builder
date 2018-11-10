<?php 

namespace BlueprintBuilder;

class HiddenFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsHiddenFieldClass()
  {
    $fields = new BlueprintFields();
    $hiddenField = $fields->addHidden('Test Hidden');
  
    $this->assertInstanceOf(
    HiddenField::class,
    $hiddenField 
    );
  
  }
}