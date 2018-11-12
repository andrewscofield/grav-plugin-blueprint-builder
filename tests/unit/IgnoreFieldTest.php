<?php 

namespace BlueprintBuilder\Field;

class IgnoreFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsIgnoreFieldClass()
  {
    $fields = new BlueprintFields();
    $ignoreField = $fields->addIgnore('Test Ignore');

    $this->assertInstanceOf(
      IgnoreField::class,
      $ignoreField 
    );

  }
}