<?php 
class SignatureFieldTest extends \Codeception\Test\Unit
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

  public function testReturnsSignatureFieldClass()
  {
    $fields = new BlueprintFields();
    $signatureField = $fields->addSignature('Test Signature');

    $this->assertInstanceOf(
      SignatureField::class,
      $signatureField 
    );

  }

}