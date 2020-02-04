<?php

namespace PaymentAssist\Type;

class CTDemographicsaccommodation
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $propertyvalue;

    /**
     * @var int
     */
    private $mortgagebalance;

    /**
     * @var int
     */
    private $monthlyrental;

    /**
     * @var string
     */
    private $residentialstatus;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return CTDemographicsaccommodation
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return int
     */
    public function getPropertyvalue()
    {
        return $this->propertyvalue;
    }

    /**
     * @param int $propertyvalue
     * @return CTDemographicsaccommodation
     */
    public function withPropertyvalue($propertyvalue)
    {
        $new = clone $this;
        $new->propertyvalue = $propertyvalue;

        return $new;
    }

    /**
     * @return int
     */
    public function getMortgagebalance()
    {
        return $this->mortgagebalance;
    }

    /**
     * @param int $mortgagebalance
     * @return CTDemographicsaccommodation
     */
    public function withMortgagebalance($mortgagebalance)
    {
        $new = clone $this;
        $new->mortgagebalance = $mortgagebalance;

        return $new;
    }

    /**
     * @return int
     */
    public function getMonthlyrental()
    {
        return $this->monthlyrental;
    }

    /**
     * @param int $monthlyrental
     * @return CTDemographicsaccommodation
     */
    public function withMonthlyrental($monthlyrental)
    {
        $new = clone $this;
        $new->monthlyrental = $monthlyrental;

        return $new;
    }

    /**
     * @return string
     */
    public function getResidentialstatus()
    {
        return $this->residentialstatus;
    }

    /**
     * @param string $residentialstatus
     * @return CTDemographicsaccommodation
     */
    public function withResidentialstatus($residentialstatus)
    {
        $new = clone $this;
        $new->residentialstatus = $residentialstatus;

        return $new;
    }


}

