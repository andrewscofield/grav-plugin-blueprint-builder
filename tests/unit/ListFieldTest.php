<?php 

namespace BlueprintBuilder\Field;

class ListFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsListFieldClass()
  {
    $fields = new BlueprintFields();
    $listField = $fields->addList('Test List');

    $this->assertInstanceOf(
      ListField::class,
      $listField 
    );

  }
}