<?php

namespace PaymentAssist\Type;

class CTSummaryaddress
{
    /**
     * A value of 1 indicates that the address was found on the Postcode Address File
     *
     * @var int
     */
    private int $pafvalid;

    /**
     * A value of 1 indicates that the Electoral Roll information is based on the rolling Electoral Roll
     *
     * @var null | int
     */
    private ?int $rollingroll = null;

    /**
     * Message code indicating the level of confirmation (extended for current address)
     * The list of possible values can be obtained from the web method LookupData07a table id = summaryresidencymessagecode
     *
     * @var int
     */
    private int $messagecode;

    /**
     * @return int
     */
    public function getPafvalid(): int
    {
        return $this->pafvalid;
    }

    /**
     * @param int $pafvalid
     * @return static
     */
    public function withPafvalid(int $pafvalid): static
    {
        $new = clone $this;
        $new->pafvalid = $pafvalid;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRollingroll(): ?int
    {
        return $this->rollingroll;
    }

    /**
     * @param null | int $rollingroll
     * @return static
     */
    public function withRollingroll(?int $rollingroll): static
    {
        $new = clone $this;
        $new->rollingroll = $rollingroll;

        return $new;
    }

    /**
     * @return int
     */
    public function getMessagecode(): int
    {
        return $this->messagecode;
    }

    /**
     * @param int $messagecode
     * @return static
     */
    public function withMessagecode(int $messagecode): static
    {
        $new = clone $this;
        $new->messagecode = $messagecode;

        return $new;
    }
}

