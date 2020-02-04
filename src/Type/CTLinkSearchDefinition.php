<?php

namespace PaymentAssist\Type;

class CTLinkSearchDefinition
{

    /**
     * @var \PaymentAssist\Type\CTPayload
     */
    private $payload;

    /**
     * @var string
     */
    private $yourreference;

    /**
     * @var \PaymentAssist\Type\CTLinkrequest
     */
    private $linkrequest;

    /**
     * @return \PaymentAssist\Type\CTPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param \PaymentAssist\Type\CTPayload $payload
     * @return CTLinkSearchDefinition
     */
    public function withPayload($payload)
    {
        $new = clone $this;
        $new->payload = $payload;

        return $new;
    }

    /**
     * @return string
     */
    public function getYourreference()
    {
        return $this->yourreference;
    }

    /**
     * @param string $yourreference
     * @return CTLinkSearchDefinition
     */
    public function withYourreference($yourreference)
    {
        $new = clone $this;
        $new->yourreference = $yourreference;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTLinkrequest
     */
    public function getLinkrequest()
    {
        return $this->linkrequest;
    }

    /**
     * @param \PaymentAssist\Type\CTLinkrequest $linkrequest
     * @return CTLinkSearchDefinition
     */
    public function withLinkrequest($linkrequest)
    {
        $new = clone $this;
        $new->linkrequest = $linkrequest;

        return $new;
    }


}

