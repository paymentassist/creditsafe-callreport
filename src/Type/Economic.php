<?php

namespace PaymentAssist\Type;

class Economic
{

    /**
     * @var float
     */
    private $unem_prob;

    /**
     * @var int
     */
    private $unem_index;

    /**
     * @var float
     */
    private $econscore;

    /**
     * @var int
     */
    private $econband;

    /**
     * @return float
     */
    public function getUnem_prob()
    {
        return $this->unem_prob;
    }

    /**
     * @param float $unem_prob
     * @return Economic
     */
    public function withUnem_prob($unem_prob)
    {
        $new = clone $this;
        $new->unem_prob = $unem_prob;

        return $new;
    }

    /**
     * @return int
     */
    public function getUnem_index()
    {
        return $this->unem_index;
    }

    /**
     * @param int $unem_index
     * @return Economic
     */
    public function withUnem_index($unem_index)
    {
        $new = clone $this;
        $new->unem_index = $unem_index;

        return $new;
    }

    /**
     * @return float
     */
    public function getEconscore()
    {
        return $this->econscore;
    }

    /**
     * @param float $econscore
     * @return Economic
     */
    public function withEconscore($econscore)
    {
        $new = clone $this;
        $new->econscore = $econscore;

        return $new;
    }

    /**
     * @return int
     */
    public function getEconband()
    {
        return $this->econband;
    }

    /**
     * @param int $econband
     * @return Economic
     */
    public function withEconband($econband)
    {
        $new = clone $this;
        $new->econband = $econband;

        return $new;
    }


}

