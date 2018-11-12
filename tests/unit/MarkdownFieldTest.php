<?php 

namespace BlueprintBuilder\Field;

class MarkdownFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsMarkdownFieldClass()
  {
    $fields = new BlueprintFields();
    $markdownField = $fields->addMarkdown('Test Markdown');

    $this->assertInstanceOf(
      MarkdownField::class,
      $markdownField 
    );

  }
}