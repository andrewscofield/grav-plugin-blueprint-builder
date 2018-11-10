<?php 

namespace BlueprintBuilder;

class TabFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsTabFieldClass()
  {
    $fields = new BlueprintFields();
    $tabField = $fields->addTab('Test Tab');

    $this->assertInstanceOf(
      TabField::class,
      $tabField 
    );

  }
}