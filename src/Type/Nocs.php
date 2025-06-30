<?php

namespace PaymentAssist\Type;

class Nocs
{
    /**
     * Output structure for Notice of Dispute or Correction
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $noc;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    public function getNoc() : array
    {
        return $this->noc;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputnotice> $noc
     * @return static
     */
    public function withNoc(array $noc) : static
    {
        $new = clone $this;
        $new->noc = $noc;

        return $new;
    }
}

