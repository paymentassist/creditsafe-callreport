<?php

namespace PaymentAssist\Type;

class CTSearchResult
{
    /**
     * Operation specific details
     *
     * @var null | \PaymentAssist\Type\CTJobdetails
     */
    private ?\PaymentAssist\Type\CTJobdetails $jobdetails = null;

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
     * Request for an API based Address or Associate Link report.
     *
     * @var null | \PaymentAssist\Type\CTLinkrequest
     */
    private ?\PaymentAssist\Type\CTLinkrequest $linkrequest = null;

    /**
     * Request for a subsequent enquiry (including subsequent link enquiries) including an optional set of amendments to the previously carried out Search
     *
     * @var null | \PaymentAssist\Type\CTAmendsubsequent
     */
    private ?\PaymentAssist\Type\CTAmendsubsequent $secondaryrequest = null;

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
     * Set of applicant credit reports
     *
     * @var null | \PaymentAssist\Type\CTCreditreport
     */
    private ?\PaymentAssist\Type\CTCreditreport $creditreport = null;

    /**
     * @return null | \PaymentAssist\Type\CTJobdetails
     */
    public function getJobdetails(): ?\PaymentAssist\Type\CTJobdetails
    {
        return $this->jobdetails;
    }

    /**
     * @param null | \PaymentAssist\Type\CTJobdetails $jobdetails
     * @return static
     */
    public function withJobdetails(?\PaymentAssist\Type\CTJobdetails $jobdetails): static
    {
        $new = clone $this;
        $new->jobdetails = $jobdetails;

        return $new;
    }

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
     * @return null | \PaymentAssist\Type\CTLinkrequest
     */
    public function getLinkrequest(): ?\PaymentAssist\Type\CTLinkrequest
    {
        return $this->linkrequest;
    }

    /**
     * @param null | \PaymentAssist\Type\CTLinkrequest $linkrequest
     * @return static
     */
    public function withLinkrequest(?\PaymentAssist\Type\CTLinkrequest $linkrequest): static
    {
        $new = clone $this;
        $new->linkrequest = $linkrequest;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTAmendsubsequent
     */
    public function getSecondaryrequest(): ?\PaymentAssist\Type\CTAmendsubsequent
    {
        return $this->secondaryrequest;
    }

    /**
     * @param null | \PaymentAssist\Type\CTAmendsubsequent $secondaryrequest
     * @return static
     */
    public function withSecondaryrequest(?\PaymentAssist\Type\CTAmendsubsequent $secondaryrequest): static
    {
        $new = clone $this;
        $new->secondaryrequest = $secondaryrequest;

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

    /**
     * @return null | \PaymentAssist\Type\CTCreditreport
     */
    public function getCreditreport(): ?\PaymentAssist\Type\CTCreditreport
    {
        return $this->creditreport;
    }

    /**
     * @param null | \PaymentAssist\Type\CTCreditreport $creditreport
     * @return static
     */
    public function withCreditreport(?\PaymentAssist\Type\CTCreditreport $creditreport): static
    {
        $new = clone $this;
        $new->creditreport = $creditreport;

        return $new;
    }
}

