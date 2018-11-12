<?php 

namespace BlueprintBuilder\Field;

class FrontmatterFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsFrontmatterFieldClass()
  {
    $fields = new BlueprintFields();
    $frontmatterField = $fields->addFrontmatter('Test Frontmatter');

    $this->assertInstanceOf(
      FrontmatterField::class,
      $frontmatterField 
    );

  }
}