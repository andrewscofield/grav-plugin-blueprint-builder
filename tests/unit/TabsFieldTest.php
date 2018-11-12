<?php 

namespace BlueprintBuilder\Field;

class TabsFieldTest extends \Codeception\Test\Unit
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


  public function testReturnsTabsFieldClass()
  {
    $fields = new BlueprintFields();
    $tabsField = $fields->addTabs('Test Tabs');

    $this->assertInstanceOf(
      TabsField::class,
      $tabsField 
    );

  }
}