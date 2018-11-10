<?php 

namespace BlueprintBuilder;

class SelectOptgroupFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsSelectOptgroupFieldClass()
  {
    $fields = new BlueprintFields();
    $selectOptgroupField = $fields->addSelectOptgroup('Test SelectOptgroup');

    $this->assertInstanceOf(
      SelectOptgroupField::class,
      $selectOptgroupField 
    );

  }

}