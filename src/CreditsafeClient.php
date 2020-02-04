<?php

namespace PaymentAssist;

use PaymentAssist\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class CreditsafeClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\CTSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function search07a(\PaymentAssist\Type\CTSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return $this->call('Search07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTLinkSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function addressLinkSearch07a(\PaymentAssist\Type\CTLinkSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return $this->call('AddressLinkSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTLinkSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function associateLinkSearch07a(\PaymentAssist\Type\CTLinkSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return $this->call('AssociateLinkSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTSubsequentSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function subsequentSearch07a(\PaymentAssist\Type\CTSubsequentSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return $this->call('SubsequentSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTSubsequentSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function subsequentAddressLinkSearch07a(\PaymentAssist\Type\CTSubsequentSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return $this->call('SubsequentAddressLinkSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\CTSubsequentSearch $parameters
     * @return ResultInterface|Type\CTSearchResponse
     * @throws SoapException
     */
    public function subsequentAssociateLinkSearch07a(\PaymentAssist\Type\CTSubsequentSearch $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        return $this->call('SubsequentAssociateLinkSearch07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\ChangePassword07a $parameters
     * @return ResultInterface|Type\ChangePassword07aResponse
     * @throws SoapException
     */
    public function changePassword07a(\PaymentAssist\Type\ChangePassword07a $parameters) : \PaymentAssist\Type\ChangePassword07aResponse
    {
        return $this->call('ChangePassword07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\AnyType $parameters
     * @return ResultInterface|Type\CTLookupDataResponse
     * @throws SoapException
     */
    public function lookupData07a(\PaymentAssist\Type\AnyType $parameters) : \PaymentAssist\Type\CTLookupDataResponse
    {
        return $this->call('LookupData07a', $parameters);
    }

    /**
     * @param RequestInterface|Type\AnyType $parameters
     * @return ResultInterface|Type\CTTestResponse
     * @throws SoapException
     */
    public function test07a(\PaymentAssist\Type\AnyType $parameters) : \PaymentAssist\Type\CTTestResponse
    {
        return $this->call('Test07a', $parameters);
    }


}

