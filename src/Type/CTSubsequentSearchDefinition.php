<?php

namespace PaymentAssist\Type;

class CTSubsequentSearchDefinition
{

    /**
     * @var \PaymentAssist\Type\CTPayload
     */
    private $payload;

    /**
     * @var string
     */
    private $yourreference;

    /**
     * @var \PaymentAssist\Type\CTAmendsubsequent
     */
    private $secondaryrequest;

    /**
     * @return \PaymentAssist\Type\CTPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param \PaymentAssist\Type\CTPayload $payload
     * @return CTSubsequentSearchDefinition
     */
    public function withPayload($payload)
    {
        $new = clone $this;
        $new->payload = $payload;

        return $new;
    }

    /**
     * @return string
     */
    public function getYourreference()
    {
        return $this->yourreference;
    }

    /**
     * @param string $yourreference
     * @return CTSubsequentSearchDefinition
     */
    public function withYourreference($yourreference)
    {
        $new = clone $this;
        $new->yourreference = $yourreference;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTAmendsubsequent
     */
    public function getSecondaryrequest()
    {
        return $this->secondaryrequest;
    }

    /**
     * @param \PaymentAssist\Type\CTAmendsubsequent $secondaryrequest
     * @return CTSubsequentSearchDefinition
     */
    public function withSecondaryrequest($secondaryrequest)
    {
        $new = clone $this;
        $new->secondaryrequest = $secondaryrequest;

        return $new;
    }


}

