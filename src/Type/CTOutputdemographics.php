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
     * @var null | \PaymentAssist\Type\CTOutputdemographicsFamily
     */
    private ?\PaymentAssist\Type\CTOutputdemographicsFamily $family = null;

    /**
     * Adult household composition percentages
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographicsHousehold
     */
    private ?\PaymentAssist\Type\CTOutputdemographicsHousehold $household = null;

    /**
     * @var null | \PaymentAssist\Type\CTOutputdemographicsAge
     */
    private ?\PaymentAssist\Type\CTOutputdemographicsAge $age = null;

    /**
     * Economic and social status information
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographicsEconomic
     */
    private ?\PaymentAssist\Type\CTOutputdemographicsEconomic $economic = null;

    /**
     * Economic activity information
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographicsEconomicactivity
     */
    private ?\PaymentAssist\Type\CTOutputdemographicsEconomicactivity $economicactivity = null;

    /**
     * Social class information
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographicsSocialclass
     */
    private ?\PaymentAssist\Type\CTOutputdemographicsSocialclass $socialclass = null;

    /**
     * Housing type and property price information
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographicsHousing
     */
    private ?\PaymentAssist\Type\CTOutputdemographicsHousing $housing = null;

    /**
     * Property price indices
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographicsPropertyprice
     */
    private ?\PaymentAssist\Type\CTOutputdemographicsPropertyprice $propertyprice = null;

    /**
     * Movement characteristics
     *
     * @var null | \PaymentAssist\Type\CTOutputdemographicsMovement
     */
    private ?\PaymentAssist\Type\CTOutputdemographicsMovement $movement = null;

    /**
     * @return null | string
     */
    public function getCameouk(): ?string
    {
        return $this->cameouk;
    }

    /**
     * @param null | string $cameouk
     * @return static
     */
    public function withCameouk(?string $cameouk): static
    {
        $new = clone $this;
        $new->cameouk = $cameouk;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoinvestor(): ?string
    {
        return $this->cameoinvestor;
    }

    /**
     * @param null | string $cameoinvestor
     * @return static
     */
    public function withCameoinvestor(?string $cameoinvestor): static
    {
        $new = clone $this;
        $new->cameoinvestor = $cameoinvestor;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoincome(): ?string
    {
        return $this->cameoincome;
    }

    /**
     * @param null | string $cameoincome
     * @return static
     */
    public function withCameoincome(?string $cameoincome): static
    {
        $new = clone $this;
        $new->cameoincome = $cameoincome;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameounemployment(): ?string
    {
        return $this->cameounemployment;
    }

    /**
     * @param null | string $cameounemployment
     * @return static
     */
    public function withCameounemployment(?string $cameounemployment): static
    {
        $new = clone $this;
        $new->cameounemployment = $cameounemployment;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameoproperty(): ?string
    {
        return $this->cameoproperty;
    }

    /**
     * @param null | string $cameoproperty
     * @return static
     */
    public function withCameoproperty(?string $cameoproperty): static
    {
        $new = clone $this;
        $new->cameoproperty = $cameoproperty;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCameofinance(): ?string
    {
        return $this->cameofinance;
    }

    /**
     * @param null | string $cameofinance
     * @return static
     */
    public function withCameofinance(?string $cameofinance): static
    {
        $new = clone $this;
        $new->cameofinance = $cameofinance;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographicsFamily
     */
    public function getFamily(): ?\PaymentAssist\Type\CTOutputdemographicsFamily
    {
        return $this->family;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographicsFamily $family
     * @return static
     */
    public function withFamily(?\PaymentAssist\Type\CTOutputdemographicsFamily $family): static
    {
        $new = clone $this;
        $new->family = $family;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographicsHousehold
     */
    public function getHousehold(): ?\PaymentAssist\Type\CTOutputdemographicsHousehold
    {
        return $this->household;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographicsHousehold $household
     * @return static
     */
    public function withHousehold(?\PaymentAssist\Type\CTOutputdemographicsHousehold $household): static
    {
        $new = clone $this;
        $new->household = $household;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographicsAge
     */
    public function getAge(): ?\PaymentAssist\Type\CTOutputdemographicsAge
    {
        return $this->age;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographicsAge $age
     * @return static
     */
    public function withAge(?\PaymentAssist\Type\CTOutputdemographicsAge $age): static
    {
        $new = clone $this;
        $new->age = $age;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographicsEconomic
     */
    public function getEconomic(): ?\PaymentAssist\Type\CTOutputdemographicsEconomic
    {
        return $this->economic;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographicsEconomic $economic
     * @return static
     */
    public function withEconomic(?\PaymentAssist\Type\CTOutputdemographicsEconomic $economic): static
    {
        $new = clone $this;
        $new->economic = $economic;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographicsEconomicactivity
     */
    public function getEconomicactivity(): ?\PaymentAssist\Type\CTOutputdemographicsEconomicactivity
    {
        return $this->economicactivity;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographicsEconomicactivity $economicactivity
     * @return static
     */
    public function withEconomicactivity(?\PaymentAssist\Type\CTOutputdemographicsEconomicactivity $economicactivity): static
    {
        $new = clone $this;
        $new->economicactivity = $economicactivity;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographicsSocialclass
     */
    public function getSocialclass(): ?\PaymentAssist\Type\CTOutputdemographicsSocialclass
    {
        return $this->socialclass;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographicsSocialclass $socialclass
     * @return static
     */
    public function withSocialclass(?\PaymentAssist\Type\CTOutputdemographicsSocialclass $socialclass): static
    {
        $new = clone $this;
        $new->socialclass = $socialclass;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographicsHousing
     */
    public function getHousing(): ?\PaymentAssist\Type\CTOutputdemographicsHousing
    {
        return $this->housing;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographicsHousing $housing
     * @return static
     */
    public function withHousing(?\PaymentAssist\Type\CTOutputdemographicsHousing $housing): static
    {
        $new = clone $this;
        $new->housing = $housing;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographicsPropertyprice
     */
    public function getPropertyprice(): ?\PaymentAssist\Type\CTOutputdemographicsPropertyprice
    {
        return $this->propertyprice;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographicsPropertyprice $propertyprice
     * @return static
     */
    public function withPropertyprice(?\PaymentAssist\Type\CTOutputdemographicsPropertyprice $propertyprice): static
    {
        $new = clone $this;
        $new->propertyprice = $propertyprice;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputdemographicsMovement
     */
    public function getMovement(): ?\PaymentAssist\Type\CTOutputdemographicsMovement
    {
        return $this->movement;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputdemographicsMovement $movement
     * @return static
     */
    public function withMovement(?\PaymentAssist\Type\CTOutputdemographicsMovement $movement): static
    {
        $new = clone $this;
        $new->movement = $movement;

        return $new;
    }
}

