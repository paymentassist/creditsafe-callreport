<?php

namespace PaymentAssist\Type;

class CTOutputcifasfiling
{

    /**
     * @var \PaymentAssist\Type\Person
     */
    private $person;

    /**
     * @var \PaymentAssist\Type\Company
     */
    private $company;

    /**
     * @var \PaymentAssist\Type\Details
     */
    private $details;

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $notice;

    /**
     * @return \PaymentAssist\Type\Person
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param \PaymentAssist\Type\Person $person
     * @return CTOutputcifasfiling
     */
    public function withPerson($person)
    {
        $new = clone $this;
        $new->person = $person;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param \PaymentAssist\Type\Company $company
     * @return CTOutputcifasfiling
     */
    public function withCompany($company)
    {
        $new = clone $this;
        $new->company = $company;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Details
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param \PaymentAssist\Type\Details $details
     * @return CTOutputcifasfiling
     */
    public function withDetails($details)
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputnotice
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputnotice $notice
     * @return CTOutputcifasfiling
     */
    public function withNotice($notice)
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }


}

