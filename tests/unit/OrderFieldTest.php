<?php 

namespace BlueprintBuilder;

class OrderFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsOrderFieldClass()
  {
    $fields = new BlueprintFields();
    $orderField = $fields->addOrder('Test Order');

    $this->assertInstanceOf(
      OrderField::class,
      $orderField 
    );

  }
}