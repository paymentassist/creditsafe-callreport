<?php

namespace PaymentAssist\Type;

class CTApplicantdemographics
{

    /**
     * @var \PaymentAssist\Type\CTDemographicsperson
     */
    private $person;

    /**
     * @var \PaymentAssist\Type\CTDemographicsaccommodation
     */
    private $accommodation;

    /**
     * @var \PaymentAssist\Type\Contact
     */
    private $contact;

    /**
     * @var \PaymentAssist\Type\CTDemographicsemployment
     */
    private $employment;

    /**
     * @var \PaymentAssist\Type\CTDemographicsaccount
     */
    private $account;

    /**
     * @var \PaymentAssist\Type\CTDemographicsexpenditure
     */
    private $expenditure;

    /**
     * @var \PaymentAssist\Type\CTDemographicsincome
     */
    private $income;

    /**
     * @return \PaymentAssist\Type\CTDemographicsperson
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsperson $person
     * @return CTApplicantdemographics
     */
    public function withPerson($person)
    {
        $new = clone $this;
        $new->person = $person;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTDemographicsaccommodation
     */
    public function getAccommodation()
    {
        return $this->accommodation;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsaccommodation $accommodation
     * @return CTApplicantdemographics
     */
    public function withAccommodation($accommodation)
    {
        $new = clone $this;
        $new->accommodation = $accommodation;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param \PaymentAssist\Type\Contact $contact
     * @return CTApplicantdemographics
     */
    public function withContact($contact)
    {
        $new = clone $this;
        $new->contact = $contact;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTDemographicsemployment
     */
    public function getEmployment()
    {
        return $this->employment;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsemployment $employment
     * @return CTApplicantdemographics
     */
    public function withEmployment($employment)
    {
        $new = clone $this;
        $new->employment = $employment;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTDemographicsaccount
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsaccount $account
     * @return CTApplicantdemographics
     */
    public function withAccount($account)
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTDemographicsexpenditure
     */
    public function getExpenditure()
    {
        return $this->expenditure;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsexpenditure $expenditure
     * @return CTApplicantdemographics
     */
    public function withExpenditure($expenditure)
    {
        $new = clone $this;
        $new->expenditure = $expenditure;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTDemographicsincome
     */
    public function getIncome()
    {
        return $this->income;
    }

    /**
     * @param \PaymentAssist\Type\CTDemographicsincome $income
     * @return CTApplicantdemographics
     */
    public function withIncome($income)
    {
        $new = clone $this;
        $new->income = $income;

        return $new;
    }


}

