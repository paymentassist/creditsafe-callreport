<?php

namespace PaymentAssist\Type;

class CTPayload
{
    /**
     * Any elements or attributes can be placed within the payload container
     *
     * @var array<int<0,max>, string>
     */
    private array $any;

    /**
     * @return array<int<0,max>, string>
     */
    public function getAny() : array
    {
        return $this->any;
    }

    /**
     * @param array<int<0,max>, string> $any
     * @return static
     */
    public function withAny(array $any) : static
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }
}

