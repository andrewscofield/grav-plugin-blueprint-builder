<?php 

namespace BlueprintBuilder;

class MediapickerFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsMediapickerFieldClass()
  {
    $fields = new BlueprintFields();
    $mediapickerField = $fields->addMediapicker('Test Mediapicker');
  
    $this->assertInstanceOf(
    MediapickerField::class,
    $mediapickerField 
    );
  
  }
}