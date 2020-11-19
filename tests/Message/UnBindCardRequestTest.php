<?php
namespace Omnipay\Alfabank\Tests\Message;

use Omnipay\Alfabank\Message\UnBindCardRequest;

/**
 * Class UnBindCardRequestTest
 * @package Omnipay\Sberbank\Tests\Message
 */
class UnBindCardRequestTest extends BindCardRequestTest
{
    /**
     * Test request method
     *
     * @return string
     */
    public function getMethod()
    {
        $this->assertEquals('unBindCard.do', $this->request->getMethod());
    }

    /**
     * Get request class
     *
     * @return string
     */
    protected function getRequestClass()
    {
        return new UnBindCardRequest($this->getHttpClient(), $this->getHttpRequest());
    }
}
