<?php

namespace PaymentAssist\Type;

class Delinquent
{

    /**
     * @var \DateTimeInterface
     */
    private $delinqdate;

    /**
     * @var int
     */
    private $delinqbal;

    /**
     * @return \DateTimeInterface
     */
    public function getDelinqdate()
    {
        return $this->delinqdate;
    }

    /**
     * @param \DateTimeInterface $delinqdate
     * @return Delinquent
     */
    public function withDelinqdate($delinqdate)
    {
        $new = clone $this;
        $new->delinqdate = $delinqdate;

        return $new;
    }

    /**
     * @return int
     */
    public function getDelinqbal()
    {
        return $this->delinqbal;
    }

    /**
     * @param int $delinqbal
     * @return Delinquent
     */
    public function withDelinqbal($delinqbal)
    {
        $new = clone $this;
        $new->delinqbal = $delinqbal;

        return $new;
    }


}

