<?php

namespace PaymentAssist;

use Phpro\SoapClient\Caller\Caller;
use PaymentAssist\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\MultiArgumentRequest;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class CreditsafeClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Type\Search07a $parameters
     * @return ResultInterface & Type\CTSearchResponse
     * @throws SoapException
     */
    public function search07a(\PaymentAssist\Type\Search07a $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        $response = ($this->caller)('Search07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\CTSearchResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AddressLinkSearch07a $parameters
     * @return ResultInterface & Type\CTSearchResponse
     * @throws SoapException
     */
    public function addressLinkSearch07a(\PaymentAssist\Type\AddressLinkSearch07a $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        $response = ($this->caller)('AddressLinkSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\CTSearchResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\AssociateLinkSearch07a $parameters
     * @return ResultInterface & Type\CTSearchResponse
     * @throws SoapException
     */
    public function associateLinkSearch07a(\PaymentAssist\Type\AssociateLinkSearch07a $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        $response = ($this->caller)('AssociateLinkSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\CTSearchResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SubsequentSearch07a $parameters
     * @return ResultInterface & Type\CTSearchResponse
     * @throws SoapException
     */
    public function subsequentSearch07a(\PaymentAssist\Type\SubsequentSearch07a $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        $response = ($this->caller)('SubsequentSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\CTSearchResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SubsequentAddressLinkSearch07a $parameters
     * @return ResultInterface & Type\CTSearchResponse
     * @throws SoapException
     */
    public function subsequentAddressLinkSearch07a(\PaymentAssist\Type\SubsequentAddressLinkSearch07a $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        $response = ($this->caller)('SubsequentAddressLinkSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\CTSearchResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\SubsequentAssociateLinkSearch07a $parameters
     * @return ResultInterface & Type\CTSearchResponse
     * @throws SoapException
     */
    public function subsequentAssociateLinkSearch07a(\PaymentAssist\Type\SubsequentAssociateLinkSearch07a $parameters) : \PaymentAssist\Type\CTSearchResponse
    {
        $response = ($this->caller)('SubsequentAssociateLinkSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\CTSearchResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Type\ChangePassword07a $parameters
     * @return ResultInterface & Type\ChangePassword07aResponse
     * @throws SoapException
     */
    public function changePassword07a(\PaymentAssist\Type\ChangePassword07a $parameters) : \PaymentAssist\Type\ChangePassword07aResponse
    {
        $response = ($this->caller)('ChangePassword07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\ChangePassword07aResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * MultiArgumentRequest with following params:
     *
     * \PaymentAssist\Type\LookupData07a $parameters
     *
     * @param MultiArgumentRequest $multiArgumentRequest
     * @return ResultInterface & Type\CTLookupDataResponse
     * @throws SoapException
     */
    public function lookupData07a(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \PaymentAssist\Type\CTLookupDataResponse
    {
        $response = ($this->caller)('LookupData07a', $multiArgumentRequest);

        \Psl\Type\instance_of(\PaymentAssist\Type\CTLookupDataResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * MultiArgumentRequest with following params:
     *
     * \PaymentAssist\Type\Test07a $parameters
     *
     * @param MultiArgumentRequest $multiArgumentRequest
     * @return ResultInterface & Type\CTTestResponse
     * @throws SoapException
     */
    public function test07a(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \PaymentAssist\Type\CTTestResponse
    {
        $response = ($this->caller)('Test07a', $multiArgumentRequest);

        \Psl\Type\instance_of(\PaymentAssist\Type\CTTestResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

