<?php 

namespace BlueprintBuilder;

class HoneypotFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsHoneypotFieldClass()
  {
    $fields = new BlueprintFields();
    $honeypotField = $fields->addHoneypot('Test Honeypot');

    $this->assertInstanceOf(
      HoneypotField::class,
      $honeypotField 
    );

  }
}