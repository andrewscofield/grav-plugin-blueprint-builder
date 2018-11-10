<?php 

namespace BlueprintBuilder;

class SelectizeFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsSelectizeFieldClass()
  {
    $fields = new BlueprintFields();
    $selectizeField = $fields->addSelectize('Test Selectize');

    $this->assertInstanceOf(
      SelectizeField::class,
      $selectizeField 
    );

  }

}