<?php

namespace PaymentAssist\Type;

class Sharehld
{
    /**
     * Proportion of Households with Shares in Postcode
     *
     * @var null | float
     */
    private ?float $hhldshare = null;

    /**
     * Average Number of Shareholders per Shareholding Household
     *
     * @var null | float
     */
    private ?float $avnumhold = null;

    /**
     * Average Number of Shares per Shareholding Household
     *
     * @var null | float
     */
    private ?float $avnumshares = null;

    /**
     * Average Number of Companies invested in per Shareholding Household
     *
     * @var null | float
     */
    private ?float $avnumcomps = null;

    /**
     * Average Value of Shares per Shareholding Household
     *
     * @var null | float
     */
    private ?float $avvalshares = null;

    /**
     * @return null | float
     */
    public function getHhldshare() : ?float
    {
        return $this->hhldshare;
    }

    /**
     * @param null | float $hhldshare
     * @return static
     */
    public function withHhldshare(?float $hhldshare) : static
    {
        $new = clone $this;
        $new->hhldshare = $hhldshare;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getAvnumhold() : ?float
    {
        return $this->avnumhold;
    }

    /**
     * @param null | float $avnumhold
     * @return static
     */
    public function withAvnumhold(?float $avnumhold) : static
    {
        $new = clone $this;
        $new->avnumhold = $avnumhold;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getAvnumshares() : ?float
    {
        return $this->avnumshares;
    }

    /**
     * @param null | float $avnumshares
     * @return static
     */
    public function withAvnumshares(?float $avnumshares) : static
    {
        $new = clone $this;
        $new->avnumshares = $avnumshares;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getAvnumcomps() : ?float
    {
        return $this->avnumcomps;
    }

    /**
     * @param null | float $avnumcomps
     * @return static
     */
    public function withAvnumcomps(?float $avnumcomps) : static
    {
        $new = clone $this;
        $new->avnumcomps = $avnumcomps;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getAvvalshares() : ?float
    {
        return $this->avvalshares;
    }

    /**
     * @param null | float $avvalshares
     * @return static
     */
    public function withAvvalshares(?float $avvalshares) : static
    {
        $new = clone $this;
        $new->avvalshares = $avvalshares;

        return $new;
    }
}

