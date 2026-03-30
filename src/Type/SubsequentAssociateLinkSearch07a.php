<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SubsequentAssociateLinkSearch07a implements RequestInterface
{
    /**
     * Search Definition container type for Subsequent Search Api Request
     *
     * @var null | \PaymentAssist\Type\CTSubsequentSearchDefinition
     */
    private ?\PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition = null;

    /**
     * Constructor
     *
     * @param null | \PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition
     */
    public function __construct(?\PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition)
    {
        $this->SearchDefinition = $SearchDefinition;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSubsequentSearchDefinition
     */
    public function getSearchDefinition(): ?\PaymentAssist\Type\CTSubsequentSearchDefinition
    {
        return $this->SearchDefinition;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition
     * @return static
     */
    public function withSearchDefinition(?\PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition): static
    {
        $new = clone $this;
        $new->SearchDefinition = $SearchDefinition;

        return $new;
    }
}

