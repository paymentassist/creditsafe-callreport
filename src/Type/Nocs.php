<?php

namespace PaymentAssist\Type;

class Nocs
{

    /**
     * @var \PaymentAssist\Type\CTOutputnotice
     */
    private $noc;

    /**
     * @return \PaymentAssist\Type\CTOutputnotice
     */
    public function getNoc()
    {
        return $this->noc;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputnotice $noc
     * @return Nocs
     */
    public function withNoc($noc)
    {
        $new = clone $this;
        $new->noc = $noc;

        return $new;
    }


}

