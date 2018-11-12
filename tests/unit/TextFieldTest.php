<?php 

namespace BlueprintBuilder\Field;

use BlueprintBuilder\BlueprintFields;

class TextFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsTextFieldClass()
  {
    $fields = new BlueprintFields();
    $textField = $fields->addText('Test Text');

    $this->assertInstanceOf(
      TextField::class,
      $textField 
    );
  }

}