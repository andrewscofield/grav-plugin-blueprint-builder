<?php 

namespace BlueprintBuilder;

class PagemediaFieldTest extends \Codeception\Test\Unit
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

    public function testReturnsPagemediaFieldClass()
    {
      $fields = new BlueprintFields();
      $pagemediaField = $fields->addPagemedia('Test Pagemedia');
  
      $this->assertInstanceOf(
        PagemediaField::class,
        $pagemediaField 
      );
  
    }
  }