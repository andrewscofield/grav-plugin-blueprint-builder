<?php 

namespace BlueprintBuilder\Field;

class ColumnsFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsColumnsFieldClass()
  {
    $fields = new BlueprintFields();
    $columnsField = $fields->addColumns('Test Columns');

    $this->assertInstanceOf(
      ColumnsField::class,
      $columnsField 
    );

  }
}