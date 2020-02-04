<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CTSearchResponse implements ResultInterface
{

    /**
     * @var \PaymentAssist\Type\CTSearchResult
     */
    private $SearchResult;

    /**
     * @return \PaymentAssist\Type\CTSearchResult
     */
    public function getSearchResult()
    {
        return $this->SearchResult;
    }

    /**
     * @param \PaymentAssist\Type\CTSearchResult $SearchResult
     * @return CTSearchResponse
     */
    public function withSearchResult($SearchResult)
    {
        $new = clone $this;
        $new->SearchResult = $SearchResult;

        return $new;
    }


}

