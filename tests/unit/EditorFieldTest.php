<?php 

namespace BlueprintBuilder;

class EditorFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsEditorFieldClass()
  {
    $fields = new BlueprintFields();
    $editorField = $fields->addEditor('Test Editor');

    $this->assertInstanceOf(
      EditorField::class,
      $editorField 
    );

  }
}