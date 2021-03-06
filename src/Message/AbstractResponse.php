<?php

namespace Omnipay\Alfabank\Message;

use Omnipay\Common\Message\AbstractResponse as BaseAbstractResponse;
use Omnipay\Common\Message\RequestInterface;

abstract class AbstractResponse extends BaseAbstractResponse
{
    /**
     * {@inheritdoc}
     */
    public function __construct(RequestInterface $request, $data)
    {
        parent::__construct($request, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        return array_key_exists('errorMessage', $this->data) ? $this->data['errorMessage'] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return array_key_exists('errorCode', $this->data) ? $this->data['errorCode'] : null;
    }

    /**
     * {@inheritdoc}
     */
    public function isSuccessful()
    {
        return $this->getCode() == 0;
    }
}
