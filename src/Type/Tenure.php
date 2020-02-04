<?php

namespace PaymentAssist\Type;

class Tenure
{

    /**
     * @var float
     */
    private $tenrscore;

    /**
     * @var int
     */
    private $tenrband;

    /**
     * @return float
     */
    public function getTenrscore()
    {
        return $this->tenrscore;
    }

    /**
     * @param float $tenrscore
     * @return Tenure
     */
    public function withTenrscore($tenrscore)
    {
        $new = clone $this;
        $new->tenrscore = $tenrscore;

        return $new;
    }

    /**
     * @return int
     */
    public function getTenrband()
    {
        return $this->tenrband;
    }

    /**
     * @param int $tenrband
     * @return Tenure
     */
    public function withTenrband($tenrband)
    {
        $new = clone $this;
        $new->tenrband = $tenrband;

        return $new;
    }


}

