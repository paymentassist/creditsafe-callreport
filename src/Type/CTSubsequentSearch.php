<?php

namespace PaymentAssist\Type;

class CTSubsequentSearch
{
    /**
     * Search Definition container type for Subsequent Search Api Request
     *
     * @var null | \PaymentAssist\Type\CTSubsequentSearchDefinition
     */
    private ?\PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition = null;

    /**
     * @return null | \PaymentAssist\Type\CTSubsequentSearchDefinition
     */
    public function getSearchDefinition() : ?\PaymentAssist\Type\CTSubsequentSearchDefinition
    {
        return $this->SearchDefinition;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition
     * @return static
     */
    public function withSearchDefinition(?\PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition) : static
    {
        $new = clone $this;
        $new->SearchDefinition = $SearchDefinition;

        return $new;
    }
}

