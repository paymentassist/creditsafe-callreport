<?php

namespace PaymentAssist\Type;

class Unemprate
{
    /**
     * Unemployment Rate (count of all unemplyed claimants, at the post sector level, espressed as a rate per 1000 households)
     *
     * @var null | float
     */
    private ?float $unemrate = null;

    /**
     * Unemployment Rate Difference (the change in the unemployed claimant count between 1999 and 2002)
     *
     * @var null | float
     */
    private ?float $unemdiff = null;

    /**
     * Unemployment Rate Index (against national average)
     *
     * @var null | int
     */
    private ?int $unemind = null;

    /**
     * Overall Unemployment Rating
     *
     * @var null | float
     */
    private ?float $unemall = null;

    /**
     * Overall Unemployment Rating Index
     *
     * @var null | int
     */
    private ?int $unemallindex = null;

    /**
     * @return null | float
     */
    public function getUnemrate() : ?float
    {
        return $this->unemrate;
    }

    /**
     * @param null | float $unemrate
     * @return static
     */
    public function withUnemrate(?float $unemrate) : static
    {
        $new = clone $this;
        $new->unemrate = $unemrate;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getUnemdiff() : ?float
    {
        return $this->unemdiff;
    }

    /**
     * @param null | float $unemdiff
     * @return static
     */
    public function withUnemdiff(?float $unemdiff) : static
    {
        $new = clone $this;
        $new->unemdiff = $unemdiff;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getUnemind() : ?int
    {
        return $this->unemind;
    }

    /**
     * @param null | int $unemind
     * @return static
     */
    public function withUnemind(?int $unemind) : static
    {
        $new = clone $this;
        $new->unemind = $unemind;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getUnemall() : ?float
    {
        return $this->unemall;
    }

    /**
     * @param null | float $unemall
     * @return static
     */
    public function withUnemall(?float $unemall) : static
    {
        $new = clone $this;
        $new->unemall = $unemall;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getUnemallindex() : ?int
    {
        return $this->unemallindex;
    }

    /**
     * @param null | int $unemallindex
     * @return static
     */
    public function withUnemallindex(?int $unemallindex) : static
    {
        $new = clone $this;
        $new->unemallindex = $unemallindex;

        return $new;
    }
}

