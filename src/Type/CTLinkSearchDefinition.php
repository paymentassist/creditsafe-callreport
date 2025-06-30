<?php

namespace PaymentAssist\Type;

class CTLinkSearchDefinition
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
     * Set of link search parameters to search
     *
     * @var null | \PaymentAssist\Type\CTLinkrequest
     */
    private ?\PaymentAssist\Type\CTLinkrequest $linkrequest = null;

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
     * @return null | \PaymentAssist\Type\CTLinkrequest
     */
    public function getLinkrequest() : ?\PaymentAssist\Type\CTLinkrequest
    {
        return $this->linkrequest;
    }

    /**
     * @param null | \PaymentAssist\Type\CTLinkrequest $linkrequest
     * @return static
     */
    public function withLinkrequest(?\PaymentAssist\Type\CTLinkrequest $linkrequest) : static
    {
        $new = clone $this;
        $new->linkrequest = $linkrequest;

        return $new;
    }
}

