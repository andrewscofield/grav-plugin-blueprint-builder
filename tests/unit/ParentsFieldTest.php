<?php 

namespace BlueprintBuilder;

class ParentsFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsParentsFieldClass()
  {
    $fields = new BlueprintFields();
    $parentsField = $fields->addParents('Test Parents');

    $this->assertInstanceOf(
      ParentsField::class,
      $parentsField 
    );

  }

}