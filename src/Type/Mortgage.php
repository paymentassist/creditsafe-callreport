<?php

namespace PaymentAssist\Type;

class Mortgage
{

    /**
     * @var float
     */
    private $mortscore;

    /**
     * @var int
     */
    private $mortband;

    /**
     * @return float
     */
    public function getMortscore()
    {
        return $this->mortscore;
    }

    /**
     * @param float $mortscore
     * @return Mortgage
     */
    public function withMortscore($mortscore)
    {
        $new = clone $this;
        $new->mortscore = $mortscore;

        return $new;
    }

    /**
     * @return int
     */
    public function getMortband()
    {
        return $this->mortband;
    }

    /**
     * @param int $mortband
     * @return Mortgage
     */
    public function withMortband($mortband)
    {
        $new = clone $this;
        $new->mortband = $mortband;

        return $new;
    }


}

