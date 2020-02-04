<?php

namespace PaymentAssist\Type;

class CTOutputdemographics
{

    /**
     * @var string
     */
    private $cameouk;

    /**
     * @var string
     */
    private $cameoinvestor;

    /**
     * @var string
     */
    private $cameoincome;

    /**
     * @var string
     */
    private $cameounemployment;

    /**
     * @var string
     */
    private $cameoproperty;

    /**
     * @var string
     */
    private $cameofinance;

    /**
     * @var \PaymentAssist\Type\Family
     */
    private $family;

    /**
     * @var \PaymentAssist\Type\Household
     */
    private $household;

    /**
     * @var \PaymentAssist\Type\Age
     */
    private $age;

    /**
     * @var \PaymentAssist\Type\Economic
     */
    private $economic;

    /**
     * @var \PaymentAssist\Type\Economicactivity
     */
    private $economicactivity;

    /**
     * @var \PaymentAssist\Type\Socialclass
     */
    private $socialclass;

    /**
     * @var \PaymentAssist\Type\Housing
     */
    private $housing;

    /**
     * @var \PaymentAssist\Type\Propertyprice
     */
    private $propertyprice;

    /**
     * @var \PaymentAssist\Type\Movement
     */
    private $movement;

    /**
     * @return string
     */
    public function getCameouk()
    {
        return $this->cameouk;
    }

    /**
     * @param string $cameouk
     * @return CTOutputdemographics
     */
    public function withCameouk($cameouk)
    {
        $new = clone $this;
        $new->cameouk = $cameouk;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoinvestor()
    {
        return $this->cameoinvestor;
    }

    /**
     * @param string $cameoinvestor
     * @return CTOutputdemographics
     */
    public function withCameoinvestor($cameoinvestor)
    {
        $new = clone $this;
        $new->cameoinvestor = $cameoinvestor;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoincome()
    {
        return $this->cameoincome;
    }

    /**
     * @param string $cameoincome
     * @return CTOutputdemographics
     */
    public function withCameoincome($cameoincome)
    {
        $new = clone $this;
        $new->cameoincome = $cameoincome;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameounemployment()
    {
        return $this->cameounemployment;
    }

    /**
     * @param string $cameounemployment
     * @return CTOutputdemographics
     */
    public function withCameounemployment($cameounemployment)
    {
        $new = clone $this;
        $new->cameounemployment = $cameounemployment;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameoproperty()
    {
        return $this->cameoproperty;
    }

    /**
     * @param string $cameoproperty
     * @return CTOutputdemographics
     */
    public function withCameoproperty($cameoproperty)
    {
        $new = clone $this;
        $new->cameoproperty = $cameoproperty;

        return $new;
    }

    /**
     * @return string
     */
    public function getCameofinance()
    {
        return $this->cameofinance;
    }

    /**
     * @param string $cameofinance
     * @return CTOutputdemographics
     */
    public function withCameofinance($cameofinance)
    {
        $new = clone $this;
        $new->cameofinance = $cameofinance;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Family
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * @param \PaymentAssist\Type\Family $family
     * @return CTOutputdemographics
     */
    public function withFamily($family)
    {
        $new = clone $this;
        $new->family = $family;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Household
     */
    public function getHousehold()
    {
        return $this->household;
    }

    /**
     * @param \PaymentAssist\Type\Household $household
     * @return CTOutputdemographics
     */
    public function withHousehold($household)
    {
        $new = clone $this;
        $new->household = $household;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param \PaymentAssist\Type\Age $age
     * @return CTOutputdemographics
     */
    public function withAge($age)
    {
        $new = clone $this;
        $new->age = $age;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Economic
     */
    public function getEconomic()
    {
        return $this->economic;
    }

    /**
     * @param \PaymentAssist\Type\Economic $economic
     * @return CTOutputdemographics
     */
    public function withEconomic($economic)
    {
        $new = clone $this;
        $new->economic = $economic;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Economicactivity
     */
    public function getEconomicactivity()
    {
        return $this->economicactivity;
    }

    /**
     * @param \PaymentAssist\Type\Economicactivity $economicactivity
     * @return CTOutputdemographics
     */
    public function withEconomicactivity($economicactivity)
    {
        $new = clone $this;
        $new->economicactivity = $economicactivity;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Socialclass
     */
    public function getSocialclass()
    {
        return $this->socialclass;
    }

    /**
     * @param \PaymentAssist\Type\Socialclass $socialclass
     * @return CTOutputdemographics
     */
    public function withSocialclass($socialclass)
    {
        $new = clone $this;
        $new->socialclass = $socialclass;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Housing
     */
    public function getHousing()
    {
        return $this->housing;
    }

    /**
     * @param \PaymentAssist\Type\Housing $housing
     * @return CTOutputdemographics
     */
    public function withHousing($housing)
    {
        $new = clone $this;
        $new->housing = $housing;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Propertyprice
     */
    public function getPropertyprice()
    {
        return $this->propertyprice;
    }

    /**
     * @param \PaymentAssist\Type\Propertyprice $propertyprice
     * @return CTOutputdemographics
     */
    public function withPropertyprice($propertyprice)
    {
        $new = clone $this;
        $new->propertyprice = $propertyprice;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Movement
     */
    public function getMovement()
    {
        return $this->movement;
    }

    /**
     * @param \PaymentAssist\Type\Movement $movement
     * @return CTOutputdemographics
     */
    public function withMovement($movement)
    {
        $new = clone $this;
        $new->movement = $movement;

        return $new;
    }


}

