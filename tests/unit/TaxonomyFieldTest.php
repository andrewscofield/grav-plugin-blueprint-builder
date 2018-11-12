<?php 

namespace BlueprintBuilder\Field;

class TaxonomyFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsTaxonomyFieldClass()
  {
    $fields = new BlueprintFields();
    $taxonomyField = $fields->addTaxonomy('Test Taxonomy');

    $this->assertInstanceOf(
      TaxonomyField::class,
      $taxonomyField 
    );

  }
}