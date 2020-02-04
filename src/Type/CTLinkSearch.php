<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CTLinkSearch implements RequestInterface
{

    /**
     * @var \PaymentAssist\Type\CTLinkSearchDefinition
     */
    private $SearchDefinition;

    /**
     * Constructor
     *
     * @var \PaymentAssist\Type\CTLinkSearchDefinition $SearchDefinition
     */
    public function __construct($SearchDefinition)
    {
        $this->SearchDefinition = $SearchDefinition;
    }

    /**
     * @return \PaymentAssist\Type\CTLinkSearchDefinition
     */
    public function getSearchDefinition()
    {
        return $this->SearchDefinition;
    }

    /**
     * @param \PaymentAssist\Type\CTLinkSearchDefinition $SearchDefinition
     * @return CTLinkSearch
     */
    public function withSearchDefinition($SearchDefinition)
    {
        $new = clone $this;
        $new->SearchDefinition = $SearchDefinition;

        return $new;
    }


}

