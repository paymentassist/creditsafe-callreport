<?php

namespace PaymentAssist\Type;

class Economic
{
    /**
     * Average Percentage unemployed
     *
     * @var null | float
     */
    private ?float $unem_prob = null;

    /**
     * Index of economic inactivity
     *
     * @var null | int
     */
    private ?int $unem_index = null;

    /**
     * Economic Activity Score
     *
     * @var null | float
     */
    private ?float $econscore = null;

    /**
     * Economic Activity Band
     *
     * @var null | int
     */
    private ?int $econband = null;

    /**
     * @return null | float
     */
    public function getUnem_prob() : ?float
    {
        return $this->unem_prob;
    }

    /**
     * @param null | float $unem_prob
     * @return static
     */
    public function withUnem_prob(?float $unem_prob) : static
    {
        $new = clone $this;
        $new->unem_prob = $unem_prob;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getUnem_index() : ?int
    {
        return $this->unem_index;
    }

    /**
     * @param null | int $unem_index
     * @return static
     */
    public function withUnem_index(?int $unem_index) : static
    {
        $new = clone $this;
        $new->unem_index = $unem_index;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getEconscore() : ?float
    {
        return $this->econscore;
    }

    /**
     * @param null | float $econscore
     * @return static
     */
    public function withEconscore(?float $econscore) : static
    {
        $new = clone $this;
        $new->econscore = $econscore;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getEconband() : ?int
    {
        return $this->econband;
    }

    /**
     * @param null | int $econband
     * @return static
     */
    public function withEconband(?int $econband) : static
    {
        $new = clone $this;
        $new->econband = $econband;

        return $new;
    }
}

