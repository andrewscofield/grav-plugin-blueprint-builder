<?php 

namespace BlueprintBuilder\Field;

class DatetimeFieldTest extends \Codeception\Test\Unit
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

    public function testReturnsDatetimeFieldClass()
    {
      $fields = new BlueprintFields();
      $datetimeField = $fields->addDatetime('Test Datetime');
  
      $this->assertInstanceOf(
        DatetimeField::class,
        $datetimeField 
      );
  
    }
  }