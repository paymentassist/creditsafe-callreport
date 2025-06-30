<?php

namespace PaymentAssist\Type;

class Oias
{
    /**
     * @var array<int<0,max>, \PaymentAssist\Type\Oia>
     */
    private array $oia;

    /**
     * Total number of Opt-in associates
     *
     * @var int
     */
    private int $total;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\Oia>
     */
    public function getOia() : array
    {
        return $this->oia;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\Oia> $oia
     * @return static
     */
    public function withOia(array $oia) : static
    {
        $new = clone $this;
        $new->oia = $oia;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotal() : int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return static
     */
    public function withTotal(int $total) : static
    {
        $new = clone $this;
        $new->total = $total;

        return $new;
    }
}

