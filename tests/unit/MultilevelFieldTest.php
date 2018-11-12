<?php 

namespace BlueprintBuilder\Field;

class MultilevelFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsMultilevelFieldClass()
  {
    $fields = new BlueprintFields();
    $multilevelField = $fields->addMultilevel('Test Multilevel');

    $this->assertInstanceOf(
      MultilevelField::class,
      $multilevelField 
    );

  }
}