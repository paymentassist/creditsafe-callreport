<?php

namespace PaymentAssist\Type;

class Unemprate
{

    /**
     * @var float
     */
    private $unemrate;

    /**
     * @var float
     */
    private $unemdiff;

    /**
     * @var int
     */
    private $unemind;

    /**
     * @var float
     */
    private $unemall;

    /**
     * @var int
     */
    private $unemallindex;

    /**
     * @return float
     */
    public function getUnemrate()
    {
        return $this->unemrate;
    }

    /**
     * @param float $unemrate
     * @return Unemprate
     */
    public function withUnemrate($unemrate)
    {
        $new = clone $this;
        $new->unemrate = $unemrate;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnemdiff()
    {
        return $this->unemdiff;
    }

    /**
     * @param float $unemdiff
     * @return Unemprate
     */
    public function withUnemdiff($unemdiff)
    {
        $new = clone $this;
        $new->unemdiff = $unemdiff;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnemind()
    {
        return $this->unemind;
    }

    /**
     * @param int $unemind
     * @return Unemprate
     */
    public function withUnemind($unemind)
    {
        $new = clone $this;
        $new->unemind = $unemind;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnemall()
    {
        return $this->unemall;
    }

    /**
     * @param float $unemall
     * @return Unemprate
     */
    public function withUnemall($unemall)
    {
        $new = clone $this;
        $new->unemall = $unemall;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnemallindex()
    {
        return $this->unemallindex;
    }

    /**
     * @param int $unemallindex
     * @return Unemprate
     */
    public function withUnemallindex($unemallindex)
    {
        $new = clone $this;
        $new->unemallindex = $unemallindex;

        return $new;
    }


}

