<?php

namespace Omnipay\Alfabank\Message;

/**
 * Class UnBindCardRequest
 * @package Omnipay\Sberbank\Message
 */
class UnBindCardRequest extends BindCardRequest
{
    /**
     * @return string
     */
    public function getMethod()
    {
        return 'unBindCard.do';
    }
}
