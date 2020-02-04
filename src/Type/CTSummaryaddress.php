<?php

namespace PaymentAssist\Type;

class CTSummaryaddress
{

    /**
     * @var int
     */
    private $pafvalid;

    /**
     * @var int
     */
    private $rollingroll;

    /**
     * @var int
     */
    private $messagecode;

    /**
     * @return int
     */
    public function getPafvalid()
    {
        return $this->pafvalid;
    }

    /**
     * @param int $pafvalid
     * @return CTSummaryaddress
     */
    public function withPafvalid($pafvalid)
    {
        $new = clone $this;
        $new->pafvalid = $pafvalid;

        return $new;
    }

    /**
     * @return int
     */
    public function getRollingroll()
    {
        return $this->rollingroll;
    }

    /**
     * @param int $rollingroll
     * @return CTSummaryaddress
     */
    public function withRollingroll($rollingroll)
    {
        $new = clone $this;
        $new->rollingroll = $rollingroll;

        return $new;
    }

    /**
     * @return int
     */
    public function getMessagecode()
    {
        return $this->messagecode;
    }

    /**
     * @param int $messagecode
     * @return CTSummaryaddress
     */
    public function withMessagecode($messagecode)
    {
        $new = clone $this;
        $new->messagecode = $messagecode;

        return $new;
    }


}

