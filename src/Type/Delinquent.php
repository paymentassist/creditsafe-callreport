<?php

namespace PaymentAssist\Type;

class Delinquent
{
    /**
     * Delinquency date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $delinqdate = null;

    /**
     * Delinquency balance
     *
     * @var int
     */
    private int $delinqbal;

    /**
     * @return null | \DateTimeInterface
     */
    public function getDelinqdate() : ?\DateTimeInterface
    {
        return $this->delinqdate;
    }

    /**
     * @param null | \DateTimeInterface $delinqdate
     * @return static
     */
    public function withDelinqdate(?\DateTimeInterface $delinqdate) : static
    {
        $new = clone $this;
        $new->delinqdate = $delinqdate;

        return $new;
    }

    /**
     * @return int
     */
    public function getDelinqbal() : int
    {
        return $this->delinqbal;
    }

    /**
     * @param int $delinqbal
     * @return static
     */
    public function withDelinqbal(int $delinqbal) : static
    {
        $new = clone $this;
        $new->delinqbal = $delinqbal;

        return $new;
    }
}

