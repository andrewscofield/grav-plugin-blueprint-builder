<?php 

namespace BlueprintBuilder\Field;

class ColorFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsColorFieldClass()
  {
    $fields = new BlueprintFields();
    $colorField = $fields->addColor('Test Color');

    $this->assertInstanceOf(
      ColorField::class,
      $colorField 
    );
  }
}