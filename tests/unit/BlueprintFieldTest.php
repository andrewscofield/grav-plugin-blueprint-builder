<?php 

namespace BlueprintBuilder\Field;

use BlueprintBuilder\BlueprintFields;

class BlueprintFieldTest extends \Codeception\Test\Unit
{
  /**
   * @var \UnitTester
   */
  protected $tester;
  
  protected function _before()
  {
    $fields = new BlueprintFields();
    $this->textField = $fields->addText('Test Text');
  }

  protected function _after()
  {
  }

  public function testDefaultProperties()
  {
    $this->assertEquals($this->textField->key, 'test_text');
    $this->assertEquals($this->textField->type, 'text');
  }
}