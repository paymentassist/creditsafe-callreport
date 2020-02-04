<?php

namespace PaymentAssist\Type;

class Sharehld
{

    /**
     * @var float
     */
    private $hhldshare;

    /**
     * @var float
     */
    private $avnumhold;

    /**
     * @var float
     */
    private $avnumshares;

    /**
     * @var float
     */
    private $avnumcomps;

    /**
     * @var float
     */
    private $avvalshares;

    /**
     * @return float
     */
    public function getHhldshare()
    {
        return $this->hhldshare;
    }

    /**
     * @param float $hhldshare
     * @return Sharehld
     */
    public function withHhldshare($hhldshare)
    {
        $new = clone $this;
        $new->hhldshare = $hhldshare;

        return $new;
    }

    /**
     * @return float
     */
    public function getAvnumhold()
    {
        return $this->avnumhold;
    }

    /**
     * @param float $avnumhold
     * @return Sharehld
     */
    public function withAvnumhold($avnumhold)
    {
        $new = clone $this;
        $new->avnumhold = $avnumhold;

        return $new;
    }

    /**
     * @return float
     */
    public function getAvnumshares()
    {
        return $this->avnumshares;
    }

    /**
     * @param float $avnumshares
     * @return Sharehld
     */
    public function withAvnumshares($avnumshares)
    {
        $new = clone $this;
        $new->avnumshares = $avnumshares;

        return $new;
    }

    /**
     * @return float
     */
    public function getAvnumcomps()
    {
        return $this->avnumcomps;
    }

    /**
     * @param float $avnumcomps
     * @return Sharehld
     */
    public function withAvnumcomps($avnumcomps)
    {
        $new = clone $this;
        $new->avnumcomps = $avnumcomps;

        return $new;
    }

    /**
     * @return float
     */
    public function getAvvalshares()
    {
        return $this->avvalshares;
    }

    /**
     * @param float $avvalshares
     * @return Sharehld
     */
    public function withAvvalshares($avvalshares)
    {
        $new = clone $this;
        $new->avvalshares = $avvalshares;

        return $new;
    }


}

