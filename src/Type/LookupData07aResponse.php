<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\ResultInterface;

class LookupData07aResponse implements ResultInterface
{
    /**
     * Response type for Lookup Data Web Method
     *
     * @var null | \PaymentAssist\Type\CTLookupDataResult
     */
    private ?\PaymentAssist\Type\CTLookupDataResult $LookupDataResult = null;

    /**
     * @return null | \PaymentAssist\Type\CTLookupDataResult
     */
    public function getLookupDataResult() : ?\PaymentAssist\Type\CTLookupDataResult
    {
        return $this->LookupDataResult;
    }

    /**
     * @param null | \PaymentAssist\Type\CTLookupDataResult $LookupDataResult
     * @return static
     */
    public function withLookupDataResult(?\PaymentAssist\Type\CTLookupDataResult $LookupDataResult) : static
    {
        $new = clone $this;
        $new->LookupDataResult = $LookupDataResult;

        return $new;
    }
}

