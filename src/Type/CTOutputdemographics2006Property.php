<?php

namespace PaymentAssist\Type;

class CTOutputdemographics2006Property
{
    /**
     * Average House Age
     *
     * @var null | string
     */
    private ?string $houseage = null;

    /**
     * Household Density
     *
     * @var null | float
     */
    private ?float $hhlddensity = null;

    /**
     * Council Tax Band
     *
     * @var null | string
     */
    private ?string $ctaxband = null;

    /**
     * Postcode Location Type
     *
     * @var null | int
     */
    private ?int $locationtype = null;

    /**
     * National Average House Price
     *
     * @var null | int
     */
    private ?int $natavghouse = null;

    /**
     * Housing Type Score
     *
     * @var null | float
     */
    private ?float $housescore = null;

    /**
     * Housing Type Band
     *
     * @var null | int
     */
    private ?int $houseband = null;

    /**
     * National Average House Price Difference
     *
     * @var null | int
     */
    private ?int $pricediff = null;

    /**
     * House Price Index
     *
     * @var null | int
     */
    private ?int $priceindex = null;

    /**
     * Level of Sales Activity Index
     *
     * @var null | int
     */
    private ?int $activity = null;

    /**
     * Regional Banded House Price
     *
     * @var null | int
     */
    private ?int $regionalband = null;

    /**
     * Average Detached Property Value
     *
     * @var null | int
     */
    private ?int $avgdetvalue = null;

    /**
     * Detached Property Index
     *
     * @var null | int
     */
    private ?int $avgdetindex = null;

    /**
     * Average Semi-Detached Property Value
     *
     * @var null | int
     */
    private ?int $avgsemivalue = null;

    /**
     * Semi-Detached Property Index
     *
     * @var null | int
     */
    private ?int $avgsemiindex = null;

    /**
     * Average Terraced Property Value
     *
     * @var null | int
     */
    private ?int $avgterrvalue = null;

    /**
     * Terraced Property Index
     *
     * @var null | int
     */
    private ?int $avgterrindex = null;

    /**
     * Average Flat Property Value
     *
     * @var null | int
     */
    private ?int $avgflatvalue = null;

    /**
     * Flat Property Index
     *
     * @var null | int
     */
    private ?int $avgflatindex = null;

    /**
     * Standard Region Code
     *
     * @var null | int
     */
    private ?int $regioncode = null;

    /**
     * @return null | string
     */
    public function getHouseage(): ?string
    {
        return $this->houseage;
    }

    /**
     * @param null | string $houseage
     * @return static
     */
    public function withHouseage(?string $houseage): static
    {
        $new = clone $this;
        $new->houseage = $houseage;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getHhlddensity(): ?float
    {
        return $this->hhlddensity;
    }

    /**
     * @param null | float $hhlddensity
     * @return static
     */
    public function withHhlddensity(?float $hhlddensity): static
    {
        $new = clone $this;
        $new->hhlddensity = $hhlddensity;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCtaxband(): ?string
    {
        return $this->ctaxband;
    }

    /**
     * @param null | string $ctaxband
     * @return static
     */
    public function withCtaxband(?string $ctaxband): static
    {
        $new = clone $this;
        $new->ctaxband = $ctaxband;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getLocationtype(): ?int
    {
        return $this->locationtype;
    }

    /**
     * @param null | int $locationtype
     * @return static
     */
    public function withLocationtype(?int $locationtype): static
    {
        $new = clone $this;
        $new->locationtype = $locationtype;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getNatavghouse(): ?int
    {
        return $this->natavghouse;
    }

    /**
     * @param null | int $natavghouse
     * @return static
     */
    public function withNatavghouse(?int $natavghouse): static
    {
        $new = clone $this;
        $new->natavghouse = $natavghouse;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getHousescore(): ?float
    {
        return $this->housescore;
    }

    /**
     * @param null | float $housescore
     * @return static
     */
    public function withHousescore(?float $housescore): static
    {
        $new = clone $this;
        $new->housescore = $housescore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getHouseband(): ?int
    {
        return $this->houseband;
    }

    /**
     * @param null | int $houseband
     * @return static
     */
    public function withHouseband(?int $houseband): static
    {
        $new = clone $this;
        $new->houseband = $houseband;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPricediff(): ?int
    {
        return $this->pricediff;
    }

    /**
     * @param null | int $pricediff
     * @return static
     */
    public function withPricediff(?int $pricediff): static
    {
        $new = clone $this;
        $new->pricediff = $pricediff;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPriceindex(): ?int
    {
        return $this->priceindex;
    }

    /**
     * @param null | int $priceindex
     * @return static
     */
    public function withPriceindex(?int $priceindex): static
    {
        $new = clone $this;
        $new->priceindex = $priceindex;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getActivity(): ?int
    {
        return $this->activity;
    }

    /**
     * @param null | int $activity
     * @return static
     */
    public function withActivity(?int $activity): static
    {
        $new = clone $this;
        $new->activity = $activity;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRegionalband(): ?int
    {
        return $this->regionalband;
    }

    /**
     * @param null | int $regionalband
     * @return static
     */
    public function withRegionalband(?int $regionalband): static
    {
        $new = clone $this;
        $new->regionalband = $regionalband;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAvgdetvalue(): ?int
    {
        return $this->avgdetvalue;
    }

    /**
     * @param null | int $avgdetvalue
     * @return static
     */
    public function withAvgdetvalue(?int $avgdetvalue): static
    {
        $new = clone $this;
        $new->avgdetvalue = $avgdetvalue;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAvgdetindex(): ?int
    {
        return $this->avgdetindex;
    }

    /**
     * @param null | int $avgdetindex
     * @return static
     */
    public function withAvgdetindex(?int $avgdetindex): static
    {
        $new = clone $this;
        $new->avgdetindex = $avgdetindex;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAvgsemivalue(): ?int
    {
        return $this->avgsemivalue;
    }

    /**
     * @param null | int $avgsemivalue
     * @return static
     */
    public function withAvgsemivalue(?int $avgsemivalue): static
    {
        $new = clone $this;
        $new->avgsemivalue = $avgsemivalue;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAvgsemiindex(): ?int
    {
        return $this->avgsemiindex;
    }

    /**
     * @param null | int $avgsemiindex
     * @return static
     */
    public function withAvgsemiindex(?int $avgsemiindex): static
    {
        $new = clone $this;
        $new->avgsemiindex = $avgsemiindex;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAvgterrvalue(): ?int
    {
        return $this->avgterrvalue;
    }

    /**
     * @param null | int $avgterrvalue
     * @return static
     */
    public function withAvgterrvalue(?int $avgterrvalue): static
    {
        $new = clone $this;
        $new->avgterrvalue = $avgterrvalue;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAvgterrindex(): ?int
    {
        return $this->avgterrindex;
    }

    /**
     * @param null | int $avgterrindex
     * @return static
     */
    public function withAvgterrindex(?int $avgterrindex): static
    {
        $new = clone $this;
        $new->avgterrindex = $avgterrindex;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAvgflatvalue(): ?int
    {
        return $this->avgflatvalue;
    }

    /**
     * @param null | int $avgflatvalue
     * @return static
     */
    public function withAvgflatvalue(?int $avgflatvalue): static
    {
        $new = clone $this;
        $new->avgflatvalue = $avgflatvalue;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAvgflatindex(): ?int
    {
        return $this->avgflatindex;
    }

    /**
     * @param null | int $avgflatindex
     * @return static
     */
    public function withAvgflatindex(?int $avgflatindex): static
    {
        $new = clone $this;
        $new->avgflatindex = $avgflatindex;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRegioncode(): ?int
    {
        return $this->regioncode;
    }

    /**
     * @param null | int $regioncode
     * @return static
     */
    public function withRegioncode(?int $regioncode): static
    {
        $new = clone $this;
        $new->regioncode = $regioncode;

        return $new;
    }
}

