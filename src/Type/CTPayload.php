<?php

namespace PaymentAssist\Type;

class CTPayload
{

    /**
     * @var \PaymentAssist\Type\AnyXML
     */
    private $any;

    /**
     * @return \PaymentAssist\Type\AnyXML
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @param \PaymentAssist\Type\AnyXML $any
     * @return CTPayload
     */
    public function withAny($any)
    {
        $new = clone $this;
        $new->any = $any;

        return $new;
    }


}

