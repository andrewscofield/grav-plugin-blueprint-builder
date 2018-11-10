<?php 

namespace BlueprintBuilder;

class PagemediaselectFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsPagemediaselectFieldClass()
  {
    $fields = new BlueprintFields();
    $PagemediaselectField = $fields->addPagemediaselect('Test Pagemediaselect');

    $this->assertInstanceOf(
      PagemediaselectField::class,
      $PagemediaselectField 
    );

  }

}