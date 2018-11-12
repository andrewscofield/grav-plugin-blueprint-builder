<?php 

namespace BlueprintBuilder\Field;

class SectionFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsSectionFieldClass()
  {
    $fields = new BlueprintFields();
    $sectionField = $fields->addSection('Test Section');

    $this->assertInstanceOf(
      SectionField::class,
      $sectionField 
    );

  }

}