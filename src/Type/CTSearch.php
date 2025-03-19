<?php

namespace PaymentAssist\Type;

class CTSearch
{
    /**
     * Search Definition container type for Credit Search and BSB Web Methods
     *
     * @var null | \PaymentAssist\Type\CTSearchDefinition
     */
    private ?\PaymentAssist\Type\CTSearchDefinition $SearchDefinition = null;

    /**
     * @return null | \PaymentAssist\Type\CTSearchDefinition
     */
    public function getSearchDefinition() : ?\PaymentAssist\Type\CTSearchDefinition
    {
        return $this->SearchDefinition;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSearchDefinition $SearchDefinition
     * @return static
     */
    public function withSearchDefinition(?\PaymentAssist\Type\CTSearchDefinition $SearchDefinition) : static
    {
        $new = clone $this;
        $new->SearchDefinition = $SearchDefinition;

        return $new;
    }
}

