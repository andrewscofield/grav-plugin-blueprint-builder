<?php 

namespace BlueprintBuilder\Field;

class ThemeselectFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsThemeselectFieldClass()
  {
    $fields = new BlueprintFields();
    $textField = $fields->addText('Test Text');

    $this->assertInstanceOf(
      TextField::class,
      $textField 
    );

  }
}