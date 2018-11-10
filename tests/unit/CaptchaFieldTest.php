<?php 

namespace BlueprintBuilder;

class CaptchaFieldTest extends \Codeception\Test\Unit
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

    public function testReturnsCaptchaFieldClass()
    {
      $fields = new BlueprintFields();
      $captchaField = $fields->addCaptcha('Test Captcha');
  
      $this->assertInstanceOf(
        CaptchaField::class,
        $captchaField 
      );
  
    }
  
}