<?php 

namespace BlueprintBuilder;

class KeyFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsKeyFieldClass()
  {
    $fields = new BlueprintFields();
    $keyField = $fields->addKey('Test Key');

    $this->assertInstanceOf(
      KeyField::class,
      $keyField 
    );

  }
}