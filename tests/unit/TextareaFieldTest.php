<?php 

namespace BlueprintBuilder;

class TextareaFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsTextareaFieldClass()
  {
    $fields = new BlueprintFields();
    $textareaField = $fields->addTextarea('Test Textarea');

    $this->assertInstanceOf(
      TextareaField::class,
      $textareaField 
    );

  }
}