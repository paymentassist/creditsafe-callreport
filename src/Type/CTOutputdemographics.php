<?php

namespace PaymentAssist\Type;

class CTOutputdemographics
{
    /**
     * CAMEO UK Code - Refer to CAMEO Manual
     *
     * @var null | string
     */
    private ?string $cameouk = null;

    /**
     * CAMEO UK Code - Refer to CAMEO Manual
     *
     * @var null | string
     */
    private ?string $cameoinvestor = null;

    /**
     * CAMEO Income Code - Refer to CAMEO Manual
     *
     * @var null | string
     */
    private ?string $cameoincome = null;

    /**
     * CAMEO Unemployment Code - Refer to CAMEO Manual
     *
     * @var null | string
     */
    private ?string $cameounemployment = null;

    /**
     * CAMEO Property Code - Refer to CAMEO Manual
     *
     * @var null | string
     */
    private ?string $cameoproperty = null;

    /**
     * CAMEO Finance Code - Refer to CAMEO Manual
     *
     * @var null | string
     */
    private ?string $cameofinance = null;

    /**
     * Family status and life-stage codes
     *
     * @var null | \PaymentAssist\Type\Family
     */
    private ?\PaymentAssist\Type\Family $family = null;

    /**
     * Adult household composition percentages
     *
     * @var null | \PaymentAssist\Type\Household
     */
    private ?\PaymentAssist\Type\Household $household = null;

    /**
     * @var null | \PaymentAssist\Type\Age
     */
    private ?\PaymentAssist\Type\Age $age = null;

    /**
     * Economic and social status information
     *
     * @var null | \PaymentAssist\Type\Economic
     */
    private ?\PaymentAssist\Type\Economic $economic = null;

    /**
     * Economic activity information
     *
     * @var null | \PaymentAssist\Type\Economicactivity
     */
    private ?\PaymentAssist\Type\Economicactivity $economicactivity = null;

    /**
     * Social class information
     *
     * @var null | \PaymentAssist\Type\Socialclass
     */
    private ?\PaymentAssist\Type\Socialclass $socialclass = null;

    /**
     * Housing type and property price information
     *
     * @var null | \PaymentAssist\Type\Housing
     */
    private ?\PaymentAssist\Type\Housing $housing = null;

    /**
     * Property price indices
     *
     * @var null | \PaymentAssist\Type\Propertyprice
     */
    private ?\PaymentAssist\Type\Propertyprice $propertyprice = null;

    /**
     * Movement characteristics
     *
     * @var null | \PaymentAssist\Type\Movement
     */
    private ?\PaymentAssist\Type\Movement $movement = null;

    /**
     * @return null | string
     */
    public function getCameouk() : ?string
    {
        return $this->cameouk;
    }

    /**
     * @param null | string $cameouk
     * @return static
     */
    public function withCameouk(?string $cameouk) : static
    {
        $new = clone $this;
        $new->cameouk = $cameouk;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoinvestor() : ?string
    {
        return $this->cameoinvestor;
    }

    /**
     * @param null | string $cameoinvestor
     * @return static
     */
    public function withCameoinvestor(?string $cameoinvestor) : static
    {
        $new = clone $this;
        $new->cameoinvestor = $cameoinvestor;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoincome() : ?string
    {
        return $this->cameoincome;
    }

    /**
     * @param null | string $cameoincome
     * @return static
     */
    public function withCameoincome(?string $cameoincome) : static
    {
        $new = clone $this;
        $new->cameoincome = $cameoincome;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameounemployment() : ?string
    {
        return $this->cameounemployment;
    }

    /**
     * @param null | string $cameounemployment
     * @return static
     */
    public function withCameounemployment(?string $cameounemployment) : static
    {
        $new = clone $this;
        $new->cameounemployment = $cameounemployment;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoproperty() : ?string
    {
        return $this->cameoproperty;
    }

    /**
     * @param null | string $cameoproperty
     * @return static
     */
    public function withCameoproperty(?string $cameoproperty) : static
    {
        $new = clone $this;
        $new->cameoproperty = $cameoproperty;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameofinance() : ?string
    {
        return $this->cameofinance;
    }

    /**
     * @param null | string $cameofinance
     * @return static
     */
    public function withCameofinance(?string $cameofinance) : static
    {
        $new = clone $this;
        $new->cameofinance = $cameofinance;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Family
     */
    public function getFamily() : ?\PaymentAssist\Type\Family
    {
        return $this->family;
    }

    /**
     * @param null | \PaymentAssist\Type\Family $family
     * @return static
     */
    public function withFamily(?\PaymentAssist\Type\Family $family) : static
    {
        $new = clone $this;
        $new->family = $family;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Household
     */
    public function getHousehold() : ?\PaymentAssist\Type\Household
    {
        return $this->household;
    }

    /**
     * @param null | \PaymentAssist\Type\Household $household
     * @return static
     */
    public function withHousehold(?\PaymentAssist\Type\Household $household) : static
    {
        $new = clone $this;
        $new->household = $household;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Age
     */
    public function getAge() : ?\PaymentAssist\Type\Age
    {
        return $this->age;
    }

    /**
     * @param null | \PaymentAssist\Type\Age $age
     * @return static
     */
    public function withAge(?\PaymentAssist\Type\Age $age) : static
    {
        $new = clone $this;
        $new->age = $age;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Economic
     */
    public function getEconomic() : ?\PaymentAssist\Type\Economic
    {
        return $this->economic;
    }

    /**
     * @param null | \PaymentAssist\Type\Economic $economic
     * @return static
     */
    public function withEconomic(?\PaymentAssist\Type\Economic $economic) : static
    {
        $new = clone $this;
        $new->economic = $economic;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Economicactivity
     */
    public function getEconomicactivity() : ?\PaymentAssist\Type\Economicactivity
    {
        return $this->economicactivity;
    }

    /**
     * @param null | \PaymentAssist\Type\Economicactivity $economicactivity
     * @return static
     */
    public function withEconomicactivity(?\PaymentAssist\Type\Economicactivity $economicactivity) : static
    {
        $new = clone $this;
        $new->economicactivity = $economicactivity;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Socialclass
     */
    public function getSocialclass() : ?\PaymentAssist\Type\Socialclass
    {
        return $this->socialclass;
    }

    /**
     * @param null | \PaymentAssist\Type\Socialclass $socialclass
     * @return static
     */
    public function withSocialclass(?\PaymentAssist\Type\Socialclass $socialclass) : static
    {
        $new = clone $this;
        $new->socialclass = $socialclass;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Housing
     */
    public function getHousing() : ?\PaymentAssist\Type\Housing
    {
        return $this->housing;
    }

    /**
     * @param null | \PaymentAssist\Type\Housing $housing
     * @return static
     */
    public function withHousing(?\PaymentAssist\Type\Housing $housing) : static
    {
        $new = clone $this;
        $new->housing = $housing;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Propertyprice
     */
    public function getPropertyprice() : ?\PaymentAssist\Type\Propertyprice
    {
        return $this->propertyprice;
    }

    /**
     * @param null | \PaymentAssist\Type\Propertyprice $propertyprice
     * @return static
     */
    public function withPropertyprice(?\PaymentAssist\Type\Propertyprice $propertyprice) : static
    {
        $new = clone $this;
        $new->propertyprice = $propertyprice;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\Movement
     */
    public function getMovement() : ?\PaymentAssist\Type\Movement
    {
        return $this->movement;
    }

    /**
     * @param null | \PaymentAssist\Type\Movement $movement
     * @return static
     */
    public function withMovement(?\PaymentAssist\Type\Movement $movement) : static
    {
        $new = clone $this;
        $new->movement = $movement;

        return $new;
    }
}

