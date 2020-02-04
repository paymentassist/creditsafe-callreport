<?php

namespace PaymentAssist\Type;

class International
{

    /**
     * @var string
     */
    private $cameointl;

    /**
     * @return string
     */
    public function getCameointl()
    {
        return $this->cameointl;
    }

    /**
     * @param string $cameointl
     * @return International
     */
    public function withCameointl($cameointl)
    {
        $new = clone $this;
        $new->cameointl = $cameointl;

        return $new;
    }


}

