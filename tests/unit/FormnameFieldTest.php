<?php 

namespace BlueprintBuilder\Field;

class FormnameFieldTest extends \Codeception\Test\Unit
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

    public function testReturnsFormnameFieldClass()
    {
      $fields = new BlueprintFields();
      $formnameField = $fields->addFormname('Test Formname');
  
      $this->assertInstanceOf(
        FormnameField::class,
        $formnameField 
      );
  
    }
  }