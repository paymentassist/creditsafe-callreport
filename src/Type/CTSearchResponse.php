<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CTSearchResponse implements ResultInterface
{
    private ?CTSearchResult $SearchResult;

    public function getSearchResult(): ?CTSearchResult
    {
        return $this->SearchResult;
    }

    public function withSearchResult(CTSearchResult $SearchResult): CTSearchResponse
    {
        $new = clone $this;
        $new->SearchResult = $SearchResult;

        return $new;
    }
}

