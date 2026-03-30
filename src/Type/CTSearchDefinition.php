<?php

namespace PaymentAssist\Type;

class CTSearchDefinition
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
     * Set of applicant name and address details to search for in addition to search related parameters
     *
     * @var null | \PaymentAssist\Type\CTSearchrequest
     */
    private ?\PaymentAssist\Type\CTSearchrequest $creditrequest = null;

    /**
     * Name and address picklist
     *
     * @var null | \PaymentAssist\Type\CTApipicklist
     */
    private ?\PaymentAssist\Type\CTApipicklist $picklist = null;

    /**
     * Reserved for future use
     *
     * @var null | string
     */
    private ?string $token = null;

    /**
     * @return null | \PaymentAssist\Type\CTPayload
     */
    public function getPayload(): ?\PaymentAssist\Type\CTPayload
    {
        return $this->payload;
    }

    /**
     * @param null | \PaymentAssist\Type\CTPayload $payload
     * @return static
     */
    public function withPayload(?\PaymentAssist\Type\CTPayload $payload): static
    {
        $new = clone $this;
        $new->payload = $payload;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getYourreference(): ?string
    {
        return $this->yourreference;
    }

    /**
     * @param null | string $yourreference
     * @return static
     */
    public function withYourreference(?string $yourreference): static
    {
        $new = clone $this;
        $new->yourreference = $yourreference;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSearchrequest
     */
    public function getCreditrequest(): ?\PaymentAssist\Type\CTSearchrequest
    {
        return $this->creditrequest;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSearchrequest $creditrequest
     * @return static
     */
    public function withCreditrequest(?\PaymentAssist\Type\CTSearchrequest $creditrequest): static
    {
        $new = clone $this;
        $new->creditrequest = $creditrequest;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTApipicklist
     */
    public function getPicklist(): ?\PaymentAssist\Type\CTApipicklist
    {
        return $this->picklist;
    }

    /**
     * @param null | \PaymentAssist\Type\CTApipicklist $picklist
     * @return static
     */
    public function withPicklist(?\PaymentAssist\Type\CTApipicklist $picklist): static
    {
        $new = clone $this;
        $new->picklist = $picklist;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getToken(): ?string
    {
        return $this->token;
    }

    /**
     * @param null | string $token
     * @return static
     */
    public function withToken(?string $token): static
    {
        $new = clone $this;
        $new->token = $token;

        return $new;
    }
}

