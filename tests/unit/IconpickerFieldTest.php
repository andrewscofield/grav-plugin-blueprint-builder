<?php 

namespace BlueprintBuilder\Field;

class IconpickerFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsIconpickerFieldClass()
  {
    $fields = new BlueprintFields();
    $iconpickerField = $fields->addIconpicker('Test Iconpicker');

    $this->assertInstanceOf(
      IconpickerField::class,
      $iconpickerField 
    );

  }
}