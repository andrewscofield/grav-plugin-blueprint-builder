<?php 

namespace BlueprintBuilder\Field;

class FileFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsFileFieldClass()
  {
    $fields = new BlueprintFields();
    $fileField = $fields->addFile('Test File');

    $this->assertInstanceOf(
      FileField::class,
      $fileField 
    );

  }

}