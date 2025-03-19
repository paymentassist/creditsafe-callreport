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
     * Method to Request a Credit Report (based on the requested Search Purpose)
     *
     * @param RequestInterface & Type\Search07a $parameters
     * @return ResultInterface & Type\Search07aResponse
     * @throws SoapException
     */
    public function search07a(\PaymentAssist\Type\Search07a $parameters) : \PaymentAssist\Type\Search07aResponse
    {
        $response = ($this->caller)('Search07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\Search07aResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Method to Request a Credit Report for the specified Address Link (requires both the original Search Identifier and a Link Navigation Identifier)
     *
     * @param RequestInterface & Type\AddressLinkSearch07a $parameters
     * @return ResultInterface & Type\AddressLinkSearch07aResponse
     * @throws SoapException
     */
    public function addressLinkSearch07a(\PaymentAssist\Type\AddressLinkSearch07a $parameters) : \PaymentAssist\Type\AddressLinkSearch07aResponse
    {
        $response = ($this->caller)('AddressLinkSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\AddressLinkSearch07aResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Method to Request a Credit Report for the specified Associate Link (requires both the original Search Identifier and a Link Navigation Identifier)
     *
     * @param RequestInterface & Type\AssociateLinkSearch07a $parameters
     * @return ResultInterface & Type\AssociateLinkSearch07aResponse
     * @throws SoapException
     */
    public function associateLinkSearch07a(\PaymentAssist\Type\AssociateLinkSearch07a $parameters) : \PaymentAssist\Type\AssociateLinkSearch07aResponse
    {
        $response = ($this->caller)('AssociateLinkSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\AssociateLinkSearch07aResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Method to Request a Subsequent copy of a Credit Report (requires the original Search Identifier)
     *
     * @param RequestInterface & Type\SubsequentSearch07a $parameters
     * @return ResultInterface & Type\SubsequentSearch07aResponse
     * @throws SoapException
     */
    public function subsequentSearch07a(\PaymentAssist\Type\SubsequentSearch07a $parameters) : \PaymentAssist\Type\SubsequentSearch07aResponse
    {
        $response = ($this->caller)('SubsequentSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\SubsequentSearch07aResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Method to Request a Subsequent copy of a Credit Report Address Link Search (requires the original Search Identifier)
     *
     * @param RequestInterface & Type\SubsequentAddressLinkSearch07a $parameters
     * @return ResultInterface & Type\SubsequentAddressLinkSearch07aResponse
     * @throws SoapException
     */
    public function subsequentAddressLinkSearch07a(\PaymentAssist\Type\SubsequentAddressLinkSearch07a $parameters) : \PaymentAssist\Type\SubsequentAddressLinkSearch07aResponse
    {
        $response = ($this->caller)('SubsequentAddressLinkSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\SubsequentAddressLinkSearch07aResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Method to Request a Subsequent copy of a Credit Report Associate Link Search (requires the original Search Identifier)
     *
     * @param RequestInterface & Type\SubsequentAssociateLinkSearch07a $parameters
     * @return ResultInterface & Type\SubsequentAssociateLinkSearch07aResponse
     * @throws SoapException
     */
    public function subsequentAssociateLinkSearch07a(\PaymentAssist\Type\SubsequentAssociateLinkSearch07a $parameters) : \PaymentAssist\Type\SubsequentAssociateLinkSearch07aResponse
    {
        $response = ($this->caller)('SubsequentAssociateLinkSearch07a', $parameters);

        \Psl\Type\instance_of(\PaymentAssist\Type\SubsequentAssociateLinkSearch07aResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Method for changing current user's password
     *
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
     * Method for looking up reference data
     *
     * MultiArgumentRequest with following params:
     *
     * \PaymentAssist\Type\LookupData07a $parameters
     *
     * @param MultiArgumentRequest $multiArgumentRequest
     * @return ResultInterface & Type\LookupData07aResponse
     * @throws SoapException
     */
    public function lookupData07a(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \PaymentAssist\Type\LookupData07aResponse
    {
        $response = ($this->caller)('LookupData07a', $multiArgumentRequest);

        \Psl\Type\instance_of(\PaymentAssist\Type\LookupData07aResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * Method for testing system availability
     *
     * MultiArgumentRequest with following params:
     *
     * \PaymentAssist\Type\Test07a $parameters
     *
     * @param MultiArgumentRequest $multiArgumentRequest
     * @return ResultInterface & Type\Test07aResponse
     * @throws SoapException
     */
    public function test07a(\Phpro\SoapClient\Type\MultiArgumentRequest $multiArgumentRequest) : \PaymentAssist\Type\Test07aResponse
    {
        $response = ($this->caller)('Test07a', $multiArgumentRequest);

        \Psl\Type\instance_of(\PaymentAssist\Type\Test07aResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

