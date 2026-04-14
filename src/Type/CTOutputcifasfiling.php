<?php

namespace PaymentAssist\Type;

class CTOutputcifasfiling
{
    /**
     * Name and address details for a Filing against a person
     *
     * @var null | \PaymentAssist\Type\CTOutputcifasfilingPerson
     */
    private ?\PaymentAssist\Type\CTOutputcifasfilingPerson $person = null;

    /**
     * Company name and address details for a Filing against a company
     *
     * @var null | \PaymentAssist\Type\CTOutputcifasfilingCompany
     */
    private ?\PaymentAssist\Type\CTOutputcifasfilingCompany $company = null;

    /**
     * Filing details
     *
     * @var \PaymentAssist\Type\CTOutputcifasfilingDetails
     */
    private \PaymentAssist\Type\CTOutputcifasfilingDetails $details;

    /**
     * Set of CIFAS Filing Dispute and Correction Notices
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * @return null | \PaymentAssist\Type\CTOutputcifasfilingPerson
     */
    public function getPerson(): ?\PaymentAssist\Type\CTOutputcifasfilingPerson
    {
        return $this->person;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputcifasfilingPerson $person
     * @return static
     */
    public function withPerson(?\PaymentAssist\Type\CTOutputcifasfilingPerson $person): static
    {
        $new = clone $this;
        $new->person = $person;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputcifasfilingCompany
     */
    public function getCompany(): ?\PaymentAssist\Type\CTOutputcifasfilingCompany
    {
        return $this->company;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputcifasfilingCompany $company
     * @return static
     */
    public function withCompany(?\PaymentAssist\Type\CTOutputcifasfilingCompany $company): static
    {
        $new = clone $this;
        $new->company = $company;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputcifasfilingDetails
     */
    public function getDetails(): \PaymentAssist\Type\CTOutputcifasfilingDetails
    {
        return $this->details;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputcifasfilingDetails $details
     * @return static
     */
    public function withDetails(\PaymentAssist\Type\CTOutputcifasfilingDetails $details): static
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    public function getNotice(): array
    {
        return $this->notice;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputnotice> $notice
     * @return static
     */
    public function withNotice(array $notice): static
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }
}

