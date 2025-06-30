<?php

namespace PaymentAssist\Type;

class International
{
    /**
     * CAMEO International Code
     *
     * @var null | string
     */
    private ?string $cameointl = null;

    /**
     * @return null | string
     */
    public function getCameointl() : ?string
    {
        return $this->cameointl;
    }

    /**
     * @param null | string $cameointl
     * @return static
     */
    public function withCameointl(?string $cameointl) : static
    {
        $new = clone $this;
        $new->cameointl = $cameointl;

        return $new;
    }
}

