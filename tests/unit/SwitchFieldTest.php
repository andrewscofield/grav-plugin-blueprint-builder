<?php 

namespace BlueprintBuilder\Field;

class SwitchFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsSwitchFieldClass()
  {
    $fields = new BlueprintFields();
    $switchField = $fields->addSwitch('Test Switch');

    $this->assertInstanceOf(
      SwitchField::class,
      $switchField 
    );

  }}