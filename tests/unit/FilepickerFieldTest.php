<?php

namespace BlueprintBuilder;

class FilepickerFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsFilepickerFieldClass()
  {
    $fields = new BlueprintFields();
    $filepickerField = $fields->addFilepicker('Test Filepicker');

    $this->assertInstanceOf(
      FilepickerField::class,
      $filepickerField 
    );

  }
}