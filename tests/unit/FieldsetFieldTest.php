<?php 

namespace BlueprintBuilder\Field;

class FieldsetFieldTest extends \Codeception\Test\Unit
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

    public function testReturnsFieldsetFieldClass()
    {
      $fields = new BlueprintFields();
      $fieldsetField = $fields->addFieldset('Test Fieldset');
  
      $this->assertInstanceOf(
        FieldsetField::class,
        $fieldsetField 
      );
  
    }
  }