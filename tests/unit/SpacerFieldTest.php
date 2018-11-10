<?php 

namespace BlueprintBuilder;

class SpacerFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsSpacerFieldClass()
  {
    $fields = new BlueprintFields();
    $spacerField = $fields->addSpacer('Test Spacer');

    $this->assertInstanceOf(
      SpacerField::class,
      $spacerField 
    );

  }

}