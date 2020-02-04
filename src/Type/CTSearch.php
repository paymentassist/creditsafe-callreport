<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CTSearch implements RequestInterface
{

    /**
     * @var \PaymentAssist\Type\CTSearchDefinition
     */
    private $SearchDefinition;

    /**
     * Constructor
     *
     * @var \PaymentAssist\Type\CTSearchDefinition $SearchDefinition
     */
    public function __construct($SearchDefinition)
    {
        $this->SearchDefinition = $SearchDefinition;
    }

    /**
     * @return \PaymentAssist\Type\CTSearchDefinition
     */
    public function getSearchDefinition()
    {
        return $this->SearchDefinition;
    }

    /**
     * @param \PaymentAssist\Type\CTSearchDefinition $SearchDefinition
     * @return CTSearch
     */
    public function withSearchDefinition($SearchDefinition)
    {
        $new = clone $this;
        $new->SearchDefinition = $SearchDefinition;

        return $new;
    }


}

