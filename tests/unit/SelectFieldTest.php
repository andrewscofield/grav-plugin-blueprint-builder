<?php 

namespace BlueprintBuilder\Field;

class SelectFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsSelectFieldClass()
  {
    $fields = new BlueprintFields();
    $selectField = $fields->addSelect('Test Select');

    $this->assertInstanceOf(
      SelectField::class,
      $selectField 
    );

  }

}