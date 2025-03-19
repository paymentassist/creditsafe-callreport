<?php

namespace PaymentAssist\Type;

class CTDemographicsaccommodation
{
    /**
     * Accommodation Type Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsaccommodationtype
     *
     * @var null | string
     */
    private ?string $type = null;

    /**
     * Estimate of how much the property is worth
     *
     * @var null | int
     */
    private ?int $propertyvalue = null;

    /**
     * The total amount of the mortgage still to be repaid
     *
     * @var null | int
     */
    private ?int $mortgagebalance = null;

    /**
     * The price that the applicant pays the home's owner for using the home
     *
     * @var null | int
     */
    private ?int $monthlyrental = null;

    /**
     * Residential Status Code
     * The list of possible values can be obtained from the web method LookupData07a table id = demographicsresidentialstatus
     *
     * @var null | string
     */
    private ?string $residentialstatus = null;

    /**
     * @return null | string
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param null | string $type
     * @return static
     */
    public function withType(?string $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPropertyvalue() : ?int
    {
        return $this->propertyvalue;
    }

    /**
     * @param null | int $propertyvalue
     * @return static
     */
    public function withPropertyvalue(?int $propertyvalue) : static
    {
        $new = clone $this;
        $new->propertyvalue = $propertyvalue;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMortgagebalance() : ?int
    {
        return $this->mortgagebalance;
    }

    /**
     * @param null | int $mortgagebalance
     * @return static
     */
    public function withMortgagebalance(?int $mortgagebalance) : static
    {
        $new = clone $this;
        $new->mortgagebalance = $mortgagebalance;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getMonthlyrental() : ?int
    {
        return $this->monthlyrental;
    }

    /**
     * @param null | int $monthlyrental
     * @return static
     */
    public function withMonthlyrental(?int $monthlyrental) : static
    {
        $new = clone $this;
        $new->monthlyrental = $monthlyrental;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResidentialstatus() : ?string
    {
        return $this->residentialstatus;
    }

    /**
     * @param null | string $residentialstatus
     * @return static
     */
    public function withResidentialstatus(?string $residentialstatus) : static
    {
        $new = clone $this;
        $new->residentialstatus = $residentialstatus;

        return $new;
    }
}

