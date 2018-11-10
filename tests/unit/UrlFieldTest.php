<?php 

namespace BlueprintBuilder;

class UrlFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsUrlFieldClass()
  {
    $fields = new BlueprintFields();
    $urlField = $fields->addUrl('Test Url');

    $this->assertInstanceOf(
      UrlField::class,
      $urlField 
    );

  }

}