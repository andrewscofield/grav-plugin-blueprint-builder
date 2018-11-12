<?php 

namespace BlueprintBuilder\Field;

class ArrayFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsArrayFieldClass()
  {
    $fields = new BlueprintFields();
    $arrayField = $fields->addArray('Test Array');
  
    $this->assertInstanceOf(
      ArrayField::class,
      $arrayField 
    );
  
  }
  }