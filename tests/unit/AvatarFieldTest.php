<?php 

namespace BlueprintBuilder\Field;

class AvatarFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsAvatarFieldClass()
  {
    $fields = new BlueprintFields();
    $avatarField = $fields->addAvatar('Test Avatar');

    $this->assertInstanceOf(
      AvatarField::class,
      $avatarField 
    );

  }

}