<?php

namespace PaymentAssist\Type;

class Bais
{

    /**
     * @var \PaymentAssist\Type\CTOutputinsolvency
     */
    private $bai;

    /**
     * @return \PaymentAssist\Type\CTOutputinsolvency
     */
    public function getBai()
    {
        return $this->bai;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputinsolvency $bai
     * @return Bais
     */
    public function withBai($bai)
    {
        $new = clone $this;
        $new->bai = $bai;

        return $new;
    }


}

