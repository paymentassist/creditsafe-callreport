<?php

namespace PaymentAssist\Type;

class CTApplicantdemographics
{
    /**
     * Customer Details for Applicant
     *
     * @var null | \PaymentAssist\Type\CTDemographicsperson
     */
    private ?\PaymentAssist\Type\CTDemographicsperson $person = null;

    /**
     * Accommodation details for Applicant
     *
     * @var null | \PaymentAssist\Type\CTDemographicsaccommodation
     */
    private ?\PaymentAssist\Type\CTDemographicsaccommodation $accommodation = null;

    /**
     * Customer Contact Details for Applicant
     *
     * @var null | \PaymentAssist\Type\Contact
     */
    private ?\PaymentAssist\Type\Contact $contact = null;

    /**
     * Applicant's Employment Details
     *
     * @var null | \PaymentAssist\Type\CTDemographicsemployment
     */
    private ?\PaymentAssist\Type\CTDemographicsemployment $employment = null;

    /**
     * Applicant's Account Details
     *
     * @var null | \PaymentAssist\Type\CTDemographicsaccount
     */
    private ?\PaymentAssist\Type\CTDemographicsaccount $account = null;

    /**
     * Applicant's Commitments and Expenditures
     *
     * @var null | \PaymentAssist\Type\CTDemographicsexpenditure
     */
    private ?\PaymentAssist\Type\CTDemographicsexpenditure $expenditure = null;

    /**
     * Income details for Applicant
     *
     * @var null | \PaymentAssist\Type\CTDemographicsincome
     */
    private ?\PaymentAssist\Type\CTDemographicsincome $income = null;

    /**
     * @return null | \PaymentAssist\Type\CTDemographicsperson
     */
    public function getPerson() : ?\PaymentAssist\Type\CTDemographicsperson
    {
        return $this->person;
    }

    /**
     * @param null | \PaymentAssist\Type\CTDemographicsperson $person
     * @return static
     */
    public function withPerson(?\PaymentAssist\Type\CTDemographicsperson $person) : static
    {
        $new = clone $this;
        $new->person = $person;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTDemographicsaccommodation
     */
    public function getAccommodation() : ?\PaymentAssist\Type\CTDemographicsaccommodation
    {
        return $this->accommodation;
    }

    /**
     * @param null | \PaymentAssist\Type\CTDemographicsaccommodation $accommodation
     * @return static
     */
    public function withAccommodation(?\PaymentAssist\Type\CTDemographicsaccommodation $accommodation) : static
    {
        $new = clone $this;
        $new->accommodation = $accommodation;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Contact
     */
    public function getContact() : ?\PaymentAssist\Type\Contact
    {
        return $this->contact;
    }

    /**
     * @param null | \PaymentAssist\Type\Contact $contact
     * @return static
     */
    public function withContact(?\PaymentAssist\Type\Contact $contact) : static
    {
        $new = clone $this;
        $new->contact = $contact;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTDemographicsemployment
     */
    public function getEmployment() : ?\PaymentAssist\Type\CTDemographicsemployment
    {
        return $this->employment;
    }

    /**
     * @param null | \PaymentAssist\Type\CTDemographicsemployment $employment
     * @return static
     */
    public function withEmployment(?\PaymentAssist\Type\CTDemographicsemployment $employment) : static
    {
        $new = clone $this;
        $new->employment = $employment;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTDemographicsaccount
     */
    public function getAccount() : ?\PaymentAssist\Type\CTDemographicsaccount
    {
        return $this->account;
    }

    /**
     * @param null | \PaymentAssist\Type\CTDemographicsaccount $account
     * @return static
     */
    public function withAccount(?\PaymentAssist\Type\CTDemographicsaccount $account) : static
    {
        $new = clone $this;
        $new->account = $account;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTDemographicsexpenditure
     */
    public function getExpenditure() : ?\PaymentAssist\Type\CTDemographicsexpenditure
    {
        return $this->expenditure;
    }

    /**
     * @param null | \PaymentAssist\Type\CTDemographicsexpenditure $expenditure
     * @return static
     */
    public function withExpenditure(?\PaymentAssist\Type\CTDemographicsexpenditure $expenditure) : static
    {
        $new = clone $this;
        $new->expenditure = $expenditure;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTDemographicsincome
     */
    public function getIncome() : ?\PaymentAssist\Type\CTDemographicsincome
    {
        return $this->income;
    }

    /**
     * @param null | \PaymentAssist\Type\CTDemographicsincome $income
     * @return static
     */
    public function withIncome(?\PaymentAssist\Type\CTDemographicsincome $income) : static
    {
        $new = clone $this;
        $new->income = $income;

        return $new;
    }
}

