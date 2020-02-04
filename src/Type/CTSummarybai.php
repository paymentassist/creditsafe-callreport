<?php

namespace PaymentAssist\Type;

class CTSummarybai
{

    /**
     * @var int
     */
    private $totaldischarged;

    /**
     * @var int
     */
    private $currentlyinsolvent;

    /**
     * @var int
     */
    private $restricted;

    /**
     * @return int
     */
    public function getTotaldischarged()
    {
        return $this->totaldischarged;
    }

    /**
     * @param int $totaldischarged
     * @return CTSummarybai
     */
    public function withTotaldischarged($totaldischarged)
    {
        $new = clone $this;
        $new->totaldischarged = $totaldischarged;

        return $new;
    }

    /**
     * @return int
     */
    public function getCurrentlyinsolvent()
    {
        return $this->currentlyinsolvent;
    }

    /**
     * @param int $currentlyinsolvent
     * @return CTSummarybai
     */
    public function withCurrentlyinsolvent($currentlyinsolvent)
    {
        $new = clone $this;
        $new->currentlyinsolvent = $currentlyinsolvent;

        return $new;
    }

    /**
     * @return int
     */
    public function getRestricted()
    {
        return $this->restricted;
    }

    /**
     * @param int $restricted
     * @return CTSummarybai
     */
    public function withRestricted($restricted)
    {
        $new = clone $this;
        $new->restricted = $restricted;

        return $new;
    }


}

