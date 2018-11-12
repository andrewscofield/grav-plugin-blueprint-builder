<?php 

namespace BlueprintBuilder\Field;

class PagesFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsPagesFieldClass()
  {
    $fields = new BlueprintFields();
    $pagesField = $fields->addPages('Test Pages');

    $this->assertInstanceOf(
      PagesField::class,
      $pagesField 
    );

  }

}