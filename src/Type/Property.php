<?php

namespace PaymentAssist\Type;

class Property
{

    /**
     * @var string
     */
    private $houseage;

    /**
     * @var float
     */
    private $hhlddensity;

    /**
     * @var string
     */
    private $ctaxband;

    /**
     * @var int
     */
    private $locationtype;

    /**
     * @var int
     */
    private $natavghouse;

    /**
     * @var float
     */
    private $housescore;

    /**
     * @var int
     */
    private $houseband;

    /**
     * @var int
     */
    private $pricediff;

    /**
     * @var int
     */
    private $priceindex;

    /**
     * @var int
     */
    private $activity;

    /**
     * @var int
     */
    private $regionalband;

    /**
     * @var int
     */
    private $avgdetvalue;

    /**
     * @var int
     */
    private $avgdetindex;

    /**
     * @var int
     */
    private $avgsemivalue;

    /**
     * @var int
     */
    private $avgsemiindex;

    /**
     * @var int
     */
    private $avgterrvalue;

    /**
     * @var int
     */
    private $avgterrindex;

    /**
     * @var int
     */
    private $avgflatvalue;

    /**
     * @var int
     */
    private $avgflatindex;

    /**
     * @var int
     */
    private $regioncode;

    /**
     * @return string
     */
    public function getHouseage()
    {
        return $this->houseage;
    }

    /**
     * @param string $houseage
     * @return Property
     */
    public function withHouseage($houseage)
    {
        $new = clone $this;
        $new->houseage = $houseage;

        return $new;
    }

    /**
     * @return float
     */
    public function getHhlddensity()
    {
        return $this->hhlddensity;
    }

    /**
     * @param float $hhlddensity
     * @return Property
     */
    public function withHhlddensity($hhlddensity)
    {
        $new = clone $this;
        $new->hhlddensity = $hhlddensity;

        return $new;
    }

    /**
     * @return string
     */
    public function getCtaxband()
    {
        return $this->ctaxband;
    }

    /**
     * @param string $ctaxband
     * @return Property
     */
    public function withCtaxband($ctaxband)
    {
        $new = clone $this;
        $new->ctaxband = $ctaxband;

        return $new;
    }

    /**
     * @return int
     */
    public function getLocationtype()
    {
        return $this->locationtype;
    }

    /**
     * @param int $locationtype
     * @return Property
     */
    public function withLocationtype($locationtype)
    {
        $new = clone $this;
        $new->locationtype = $locationtype;

        return $new;
    }

    /**
     * @return int
     */
    public function getNatavghouse()
    {
        return $this->natavghouse;
    }

    /**
     * @param int $natavghouse
     * @return Property
     */
    public function withNatavghouse($natavghouse)
    {
        $new = clone $this;
        $new->natavghouse = $natavghouse;

        return $new;
    }

    /**
     * @return float
     */
    public function getHousescore()
    {
        return $this->housescore;
    }

    /**
     * @param float $housescore
     * @return Property
     */
    public function withHousescore($housescore)
    {
        $new = clone $this;
        $new->housescore = $housescore;

        return $new;
    }

    /**
     * @return int
     */
    public function getHouseband()
    {
        return $this->houseband;
    }

    /**
     * @param int $houseband
     * @return Property
     */
    public function withHouseband($houseband)
    {
        $new = clone $this;
        $new->houseband = $houseband;

        return $new;
    }

    /**
     * @return int
     */
    public function getPricediff()
    {
        return $this->pricediff;
    }

    /**
     * @param int $pricediff
     * @return Property
     */
    public function withPricediff($pricediff)
    {
        $new = clone $this;
        $new->pricediff = $pricediff;

        return $new;
    }

    /**
     * @return int
     */
    public function getPriceindex()
    {
        return $this->priceindex;
    }

    /**
     * @param int $priceindex
     * @return Property
     */
    public function withPriceindex($priceindex)
    {
        $new = clone $this;
        $new->priceindex = $priceindex;

        return $new;
    }

    /**
     * @return int
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param int $activity
     * @return Property
     */
    public function withActivity($activity)
    {
        $new = clone $this;
        $new->activity = $activity;

        return $new;
    }

    /**
     * @return int
     */
    public function getRegionalband()
    {
        return $this->regionalband;
    }

    /**
     * @param int $regionalband
     * @return Property
     */
    public function withRegionalband($regionalband)
    {
        $new = clone $this;
        $new->regionalband = $regionalband;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvgdetvalue()
    {
        return $this->avgdetvalue;
    }

    /**
     * @param int $avgdetvalue
     * @return Property
     */
    public function withAvgdetvalue($avgdetvalue)
    {
        $new = clone $this;
        $new->avgdetvalue = $avgdetvalue;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvgdetindex()
    {
        return $this->avgdetindex;
    }

    /**
     * @param int $avgdetindex
     * @return Property
     */
    public function withAvgdetindex($avgdetindex)
    {
        $new = clone $this;
        $new->avgdetindex = $avgdetindex;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvgsemivalue()
    {
        return $this->avgsemivalue;
    }

    /**
     * @param int $avgsemivalue
     * @return Property
     */
    public function withAvgsemivalue($avgsemivalue)
    {
        $new = clone $this;
        $new->avgsemivalue = $avgsemivalue;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvgsemiindex()
    {
        return $this->avgsemiindex;
    }

    /**
     * @param int $avgsemiindex
     * @return Property
     */
    public function withAvgsemiindex($avgsemiindex)
    {
        $new = clone $this;
        $new->avgsemiindex = $avgsemiindex;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvgterrvalue()
    {
        return $this->avgterrvalue;
    }

    /**
     * @param int $avgterrvalue
     * @return Property
     */
    public function withAvgterrvalue($avgterrvalue)
    {
        $new = clone $this;
        $new->avgterrvalue = $avgterrvalue;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvgterrindex()
    {
        return $this->avgterrindex;
    }

    /**
     * @param int $avgterrindex
     * @return Property
     */
    public function withAvgterrindex($avgterrindex)
    {
        $new = clone $this;
        $new->avgterrindex = $avgterrindex;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvgflatvalue()
    {
        return $this->avgflatvalue;
    }

    /**
     * @param int $avgflatvalue
     * @return Property
     */
    public function withAvgflatvalue($avgflatvalue)
    {
        $new = clone $this;
        $new->avgflatvalue = $avgflatvalue;

        return $new;
    }

    /**
     * @return int
     */
    public function getAvgflatindex()
    {
        return $this->avgflatindex;
    }

    /**
     * @param int $avgflatindex
     * @return Property
     */
    public function withAvgflatindex($avgflatindex)
    {
        $new = clone $this;
        $new->avgflatindex = $avgflatindex;

        return $new;
    }

    /**
     * @return int
     */
    public function getRegioncode()
    {
        return $this->regioncode;
    }

    /**
     * @param int $regioncode
     * @return Property
     */
    public function withRegioncode($regioncode)
    {
        $new = clone $this;
        $new->regioncode = $regioncode;

        return $new;
    }


}

