<?php

namespace PaymentAssist\Type;

class Unemployment
{
    /**
     * Long Term Male Unemployment
     *
     * @var null | float
     */
    private ?float $unemmalelt = null;

    /**
     * Unemployment among 18 to 24 year olds
     *
     * @var null | float
     */
    private ?float $unem1824 = null;

    /**
     * Unemployment among 25 to 39 year olds
     *
     * @var null | float
     */
    private ?float $unem2539 = null;

    /**
     * Unemployment among those aged 40 and over
     *
     * @var null | float
     */
    private ?float $unem40pl = null;

    /**
     * Unemployment Score
     *
     * @var null | float
     */
    private ?float $unemscore = null;

    /**
     * Unemployment Band
     *
     * @var null | int
     */
    private ?int $unemband = null;

    /**
     * @return null | float
     */
    public function getUnemmalelt() : ?float
    {
        return $this->unemmalelt;
    }

    /**
     * @param null | float $unemmalelt
     * @return static
     */
    public function withUnemmalelt(?float $unemmalelt) : static
    {
        $new = clone $this;
        $new->unemmalelt = $unemmalelt;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getUnem1824() : ?float
    {
        return $this->unem1824;
    }

    /**
     * @param null | float $unem1824
     * @return static
     */
    public function withUnem1824(?float $unem1824) : static
    {
        $new = clone $this;
        $new->unem1824 = $unem1824;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getUnem2539() : ?float
    {
        return $this->unem2539;
    }

    /**
     * @param null | float $unem2539
     * @return static
     */
    public function withUnem2539(?float $unem2539) : static
    {
        $new = clone $this;
        $new->unem2539 = $unem2539;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getUnem40pl() : ?float
    {
        return $this->unem40pl;
    }

    /**
     * @param null | float $unem40pl
     * @return static
     */
    public function withUnem40pl(?float $unem40pl) : static
    {
        $new = clone $this;
        $new->unem40pl = $unem40pl;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getUnemscore() : ?float
    {
        return $this->unemscore;
    }

    /**
     * @param null | float $unemscore
     * @return static
     */
    public function withUnemscore(?float $unemscore) : static
    {
        $new = clone $this;
        $new->unemscore = $unemscore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getUnemband() : ?int
    {
        return $this->unemband;
    }

    /**
     * @param null | int $unemband
     * @return static
     */
    public function withUnemband(?int $unemband) : static
    {
        $new = clone $this;
        $new->unemband = $unemband;

        return $new;
    }
}

