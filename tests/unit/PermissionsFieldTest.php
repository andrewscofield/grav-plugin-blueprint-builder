<?php 

namespace BlueprintBuilder;

class PermissionsFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsPermissionFieldClass()
  {
    $fields = new BlueprintFields();
    $permissionField = $fields->addPermission('Test Permission');

    $this->assertInstanceOf(
      PermissionField::class,
      $permissionField 
    );

  }

}