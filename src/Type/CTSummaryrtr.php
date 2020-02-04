<?php

namespace PaymentAssist\Type;

class CTSummaryrtr
{

    /**
     * @var int
     */
    private $hasupdates;

    /**
     * @return int
     */
    public function getHasupdates()
    {
        return $this->hasupdates;
    }

    /**
     * @param int $hasupdates
     * @return CTSummaryrtr
     */
    public function withHasupdates($hasupdates)
    {
        $new = clone $this;
        $new->hasupdates = $hasupdates;

        return $new;
    }


}

