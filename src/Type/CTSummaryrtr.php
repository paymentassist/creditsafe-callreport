<?php

namespace PaymentAssist\Type;

class CTSummaryrtr
{
    /**
     * Indicates if the report contains RTR accounts data.
     *
     * @var null | int
     */
    private ?int $hasupdates = null;

    /**
     * @return null | int
     */
    public function getHasupdates() : ?int
    {
        return $this->hasupdates;
    }

    /**
     * @param null | int $hasupdates
     * @return static
     */
    public function withHasupdates(?int $hasupdates) : static
    {
        $new = clone $this;
        $new->hasupdates = $hasupdates;

        return $new;
    }
}

