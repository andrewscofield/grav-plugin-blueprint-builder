<?php 

namespace BlueprintBuilder;

class BlueprintFieldsTest extends \Codeception\Test\Unit
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

  // tests
  public function testReturnsTextFieldClass()
  {
    $bluePrints = new BlueprintFields();
    $textField = $bluePrints->addText('Test TextField');

    $this->assertInstanceOf(
      TextField::class,
      $textField 
    );

  }
}