<?php 

namespace BlueprintBuilder;

class TelFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsTelFieldClass()
  {
    $fields = new BlueprintFields();
    $telField = $fields->addTel('Test Tel');

    $this->assertInstanceOf(
      TelField::class,
      $telField 
    );

  }

}