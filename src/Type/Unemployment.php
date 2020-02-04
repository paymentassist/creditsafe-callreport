<?php

namespace PaymentAssist\Type;

class Unemployment
{

    /**
     * @var float
     */
    private $unemmalelt;

    /**
     * @var float
     */
    private $unem1824;

    /**
     * @var float
     */
    private $unem2539;

    /**
     * @var float
     */
    private $unem40pl;

    /**
     * @var float
     */
    private $unemscore;

    /**
     * @var int
     */
    private $unemband;

    /**
     * @return float
     */
    public function getUnemmalelt()
    {
        return $this->unemmalelt;
    }

    /**
     * @param float $unemmalelt
     * @return Unemployment
     */
    public function withUnemmalelt($unemmalelt)
    {
        $new = clone $this;
        $new->unemmalelt = $unemmalelt;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnem1824()
    {
        return $this->unem1824;
    }

    /**
     * @param float $unem1824
     * @return Unemployment
     */
    public function withUnem1824($unem1824)
    {
        $new = clone $this;
        $new->unem1824 = $unem1824;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnem2539()
    {
        return $this->unem2539;
    }

    /**
     * @param float $unem2539
     * @return Unemployment
     */
    public function withUnem2539($unem2539)
    {
        $new = clone $this;
        $new->unem2539 = $unem2539;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnem40pl()
    {
        return $this->unem40pl;
    }

    /**
     * @param float $unem40pl
     * @return Unemployment
     */
    public function withUnem40pl($unem40pl)
    {
        $new = clone $this;
        $new->unem40pl = $unem40pl;

        return $new;
    }

    /**
     * @return float
     */
    public function getUnemscore()
    {
        return $this->unemscore;
    }

    /**
     * @param float $unemscore
     * @return Unemployment
     */
    public function withUnemscore($unemscore)
    {
        $new = clone $this;
        $new->unemscore = $unemscore;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnemband()
    {
        return $this->unemband;
    }

    /**
     * @param int $unemband
     * @return Unemployment
     */
    public function withUnemband($unemband)
    {
        $new = clone $this;
        $new->unemband = $unemband;

        return $new;
    }


}

