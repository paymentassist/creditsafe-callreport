<?php

namespace PaymentAssist;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class CreditsafeClient
{
    private Caller $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\CTSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function search07a(\PaymentAssist\Type\CTSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return ($this->caller)('Search07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTLinkSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function addressLinkSearch07a(\PaymentAssist\Type\CTLinkSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return ($this->caller)('AddressLinkSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTLinkSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function associateLinkSearch07a(\PaymentAssist\Type\CTLinkSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return ($this->caller)('AssociateLinkSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTSubsequentSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function subsequentSearch07a(\PaymentAssist\Type\CTSubsequentSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return ($this->caller)('SubsequentSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTSubsequentSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function subsequentAddressLinkSearch07a(\PaymentAssist\Type\CTSubsequentSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return ($this->caller)('SubsequentAddressLinkSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTSubsequentSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function subsequentAssociateLinkSearch07a(\PaymentAssist\Type\CTSubsequentSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return ($this->caller)('SubsequentAssociateLinkSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\ChangePassword07a $parameters
     * @return ResultInterface|Type\ChangePassword07aResponse
     * @throws SoapException
     */
    public function changePassword07a(\PaymentAssist\Type\ChangePassword07a $parameters) : \PaymentAssist\Type\ChangePassword07aResponse
    {
        return ($this->caller)('ChangePassword07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\AnyType $parameters
     * @return ResultInterface|Type\CTLookupDataResponse
     * @throws SoapException
     */
    public function lookupData07a(\PaymentAssist\Type\AnyType $parameters) : \PaymentAssist\Type\CTLookupDataResponse
    {
        return ($this->caller)('LookupData07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\AnyType $parameters
     * @return ResultInterface|Type\CTTestResponse
     * @throws SoapException
     */
    public function test07a(\PaymentAssist\Type\AnyType $parameters) : \PaymentAssist\Type\CTTestResponse
    {
        return ($this->caller)('Test07a', $parameters);
    }


}

