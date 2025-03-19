<?php

namespace PaymentAssist\Type;

class CTSubsequentSearchDefinition
{
    /**
     * Container for client's own data - returned in the response message
     *
     * @var null | \PaymentAssist\Type\CTPayload
     */
    private ?\PaymentAssist\Type\CTPayload $payload = null;

    /**
     * Your Reference will allow you to include a reference which can be used to internally identify applications
     *
     * @var null | string
     */
    private ?string $yourreference = null;

    /**
     * Set of subsequent search parameters to search
     *
     * @var null | \PaymentAssist\Type\CTAmendsubsequent
     */
    private ?\PaymentAssist\Type\CTAmendsubsequent $secondaryrequest = null;

    /**
     * @return null | \PaymentAssist\Type\CTPayload
     */
    public function getPayload() : ?\PaymentAssist\Type\CTPayload
    {
        return $this->payload;
    }

    /**
     * @param null | \PaymentAssist\Type\CTPayload $payload
     * @return static
     */
    public function withPayload(?\PaymentAssist\Type\CTPayload $payload) : static
    {
        $new = clone $this;
        $new->payload = $payload;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getYourreference() : ?string
    {
        return $this->yourreference;
    }

    /**
     * @param null | string $yourreference
     * @return static
     */
    public function withYourreference(?string $yourreference) : static
    {
        $new = clone $this;
        $new->yourreference = $yourreference;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTAmendsubsequent
     */
    public function getSecondaryrequest() : ?\PaymentAssist\Type\CTAmendsubsequent
    {
        return $this->secondaryrequest;
    }

    /**
     * @param null | \PaymentAssist\Type\CTAmendsubsequent $secondaryrequest
     * @return static
     */
    public function withSecondaryrequest(?\PaymentAssist\Type\CTAmendsubsequent $secondaryrequest) : static
    {
        $new = clone $this;
        $new->secondaryrequest = $secondaryrequest;

        return $new;
    }
}

