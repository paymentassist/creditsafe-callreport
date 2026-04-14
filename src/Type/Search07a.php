<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Search07a implements RequestInterface
{
    /**
     * Search Definition container type for Credit Search and BSB Web Methods
     *
     * @var null | \PaymentAssist\Type\CTSearchDefinition
     */
    private ?\PaymentAssist\Type\CTSearchDefinition $SearchDefinition = null;

    /**
     * Constructor
     *
     * @param null | \PaymentAssist\Type\CTSearchDefinition $SearchDefinition
     */
    public function __construct(?\PaymentAssist\Type\CTSearchDefinition $SearchDefinition)
    {
        $this->SearchDefinition = $SearchDefinition;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSearchDefinition
     */
    public function getSearchDefinition(): ?\PaymentAssist\Type\CTSearchDefinition
    {
        return $this->SearchDefinition;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSearchDefinition $SearchDefinition
     * @return static
     */
    public function withSearchDefinition(?\PaymentAssist\Type\CTSearchDefinition $SearchDefinition): static
    {
        $new = clone $this;
        $new->SearchDefinition = $SearchDefinition;

        return $new;
    }
}

