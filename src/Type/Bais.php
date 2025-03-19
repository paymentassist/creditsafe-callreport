<?php

namespace PaymentAssist\Type;

class Bais
{
    /**
     * Output structure for an Insolvency
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputinsolvency>
     */
    private array $bai;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputinsolvency>
     */
    public function getBai() : array
    {
        return $this->bai;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputinsolvency> $bai
     * @return static
     */
    public function withBai(array $bai) : static
    {
        $new = clone $this;
        $new->bai = $bai;

        return $new;
    }
}

