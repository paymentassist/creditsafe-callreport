<?php

namespace PaymentAssist\Type;

class CTOutputcifasfiling
{
    /**
     * Name and address details for a Filing against a person
     *
     * @var null | \PaymentAssist\Type\Person
     */
    private ?\PaymentAssist\Type\Person $person = null;

    /**
     * Company name and address details for a Filing against a company
     *
     * @var null | \PaymentAssist\Type\Company
     */
    private ?\PaymentAssist\Type\Company $company = null;

    /**
     * Filing details
     *
     * @var \PaymentAssist\Type\Details
     */
    private \PaymentAssist\Type\Details $details;

    /**
     * Set of CIFAS Filing Dispute and Correction Notices
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * @return null | \PaymentAssist\Type\Person
     */
    public function getPerson() : ?\PaymentAssist\Type\Person
    {
        return $this->person;
    }

    /**
     * @param null | \PaymentAssist\Type\Person $person
     * @return static
     */
    public function withPerson(?\PaymentAssist\Type\Person $person) : static
    {
        $new = clone $this;
        $new->person = $person;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Company
     */
    public function getCompany() : ?\PaymentAssist\Type\Company
    {
        return $this->company;
    }

    /**
     * @param null | \PaymentAssist\Type\Company $company
     * @return static
     */
    public function withCompany(?\PaymentAssist\Type\Company $company) : static
    {
        $new = clone $this;
        $new->company = $company;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Details
     */
    public function getDetails() : \PaymentAssist\Type\Details
    {
        return $this->details;
    }

    /**
     * @param \PaymentAssist\Type\Details $details
     * @return static
     */
    public function withDetails(\PaymentAssist\Type\Details $details) : static
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    public function getNotice() : array
    {
        return $this->notice;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputnotice> $notice
     * @return static
     */
    public function withNotice(array $notice) : static
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }
}

