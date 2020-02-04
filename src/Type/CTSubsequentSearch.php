<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CTSubsequentSearch implements RequestInterface
{

    /**
     * @var \PaymentAssist\Type\CTSubsequentSearchDefinition
     */
    private $SearchDefinition;

    /**
     * Constructor
     *
     * @var \PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition
     */
    public function __construct($SearchDefinition)
    {
        $this->SearchDefinition = $SearchDefinition;
    }

    /**
     * @return \PaymentAssist\Type\CTSubsequentSearchDefinition
     */
    public function getSearchDefinition()
    {
        return $this->SearchDefinition;
    }

    /**
     * @param \PaymentAssist\Type\CTSubsequentSearchDefinition $SearchDefinition
     * @return CTSubsequentSearch
     */
    public function withSearchDefinition($SearchDefinition)
    {
        $new = clone $this;
        $new->SearchDefinition = $SearchDefinition;

        return $new;
    }


}

