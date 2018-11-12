<?php 

namespace BlueprintBuilder\Field;

class ColumnFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsColumnFieldClass()
  {
    $fields = new BlueprintFields();
    $columnField = $fields->addColumn('Test Column');

    $this->assertInstanceOf(
      ColumnField::class,
      $columnField 
    );
  }
}