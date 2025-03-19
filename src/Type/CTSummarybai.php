<?php

namespace PaymentAssist\Type;

class CTSummarybai
{
    /**
     * Total number of discharged Insolvencies
     *
     * @var null | int
     */
    private ?int $totaldischarged = null;

    /**
     * A value of 1 indicates currently insolvent
     *
     * @var int
     */
    private int $currentlyinsolvent;

    /**
     * A value of 1 indicates that a restriction exists
     *
     * @var null | int
     */
    private ?int $restricted = null;

    /**
     * @return null | int
     */
    public function getTotaldischarged() : ?int
    {
        return $this->totaldischarged;
    }

    /**
     * @param null | int $totaldischarged
     * @return static
     */
    public function withTotaldischarged(?int $totaldischarged) : static
    {
        $new = clone $this;
        $new->totaldischarged = $totaldischarged;

        return $new;
    }

    /**
     * @return int
     */
    public function getCurrentlyinsolvent() : int
    {
        return $this->currentlyinsolvent;
    }

    /**
     * @param int $currentlyinsolvent
     * @return static
     */
    public function withCurrentlyinsolvent(int $currentlyinsolvent) : static
    {
        $new = clone $this;
        $new->currentlyinsolvent = $currentlyinsolvent;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRestricted() : ?int
    {
        return $this->restricted;
    }

    /**
     * @param null | int $restricted
     * @return static
     */
    public function withRestricted(?int $restricted) : static
    {
        $new = clone $this;
        $new->restricted = $restricted;

        return $new;
    }
}

