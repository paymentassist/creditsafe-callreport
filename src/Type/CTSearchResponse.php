<?php

namespace PaymentAssist\Type;

class CTSearchResponse
{
    /**
     * Response type for Credit Search Web Methods
     *
     * @var null | \PaymentAssist\Type\CTSearchResult
     */
    private ?\PaymentAssist\Type\CTSearchResult $SearchResult = null;

    /**
     * @return null | \PaymentAssist\Type\CTSearchResult
     */
    public function getSearchResult() : ?\PaymentAssist\Type\CTSearchResult
    {
        return $this->SearchResult;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSearchResult $SearchResult
     * @return static
     */
    public function withSearchResult(?\PaymentAssist\Type\CTSearchResult $SearchResult) : static
    {
        $new = clone $this;
        $new->SearchResult = $SearchResult;

        return $new;
    }
}

