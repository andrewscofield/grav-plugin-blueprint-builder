<?php 

namespace BlueprintBuilder;

class SelectuniqueFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsSelectuniqueFieldClass()
  {
    $fields = new BlueprintFields();
    $selectuniqueField = $fields->addSelectunique('Test Selectunique');

    $this->assertInstanceOf(
      SelectuniqueField::class,
      $selectuniqueField 
    );

  }

}