<?php

namespace PaymentAssist\Type;

class CTLinkSearch
{
    /**
     * Search Definition container type for Address and Associate Link Searches
     *
     * @var null | \PaymentAssist\Type\CTLinkSearchDefinition
     */
    private ?\PaymentAssist\Type\CTLinkSearchDefinition $SearchDefinition = null;

    /**
     * @return null | \PaymentAssist\Type\CTLinkSearchDefinition
     */
    public function getSearchDefinition(): ?\PaymentAssist\Type\CTLinkSearchDefinition
    {
        return $this->SearchDefinition;
    }

    /**
     * @param null | \PaymentAssist\Type\CTLinkSearchDefinition $SearchDefinition
     * @return static
     */
    public function withSearchDefinition(?\PaymentAssist\Type\CTLinkSearchDefinition $SearchDefinition): static
    {
        $new = clone $this;
        $new->SearchDefinition = $SearchDefinition;

        return $new;
    }
}

