<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CTLookupDataResponse implements ResultInterface
{

    /**
     * @var \PaymentAssist\Type\CTLookupDataResult
     */
    private $LookupDataResult;

    /**
     * @return \PaymentAssist\Type\CTLookupDataResult
     */
    public function getLookupDataResult()
    {
        return $this->LookupDataResult;
    }

    /**
     * @param \PaymentAssist\Type\CTLookupDataResult $LookupDataResult
     * @return CTLookupDataResponse
     */
    public function withLookupDataResult($LookupDataResult)
    {
        $new = clone $this;
        $new->LookupDataResult = $LookupDataResult;

        return $new;
    }


}

