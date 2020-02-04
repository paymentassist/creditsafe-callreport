<?php

namespace PaymentAssist\Type;

class CTSearchDefinition
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
     * @var \PaymentAssist\Type\CTSearchrequest
     */
    private $creditrequest;

    /**
     * @var \PaymentAssist\Type\CTApipicklist
     */
    private $picklist;

    /**
     * @var string
     */
    private $token;

    /**
     * @return \PaymentAssist\Type\CTPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param \PaymentAssist\Type\CTPayload $payload
     * @return CTSearchDefinition
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
     * @return CTSearchDefinition
     */
    public function withYourreference($yourreference)
    {
        $new = clone $this;
        $new->yourreference = $yourreference;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSearchrequest
     */
    public function getCreditrequest()
    {
        return $this->creditrequest;
    }

    /**
     * @param \PaymentAssist\Type\CTSearchrequest $creditrequest
     * @return CTSearchDefinition
     */
    public function withCreditrequest($creditrequest)
    {
        $new = clone $this;
        $new->creditrequest = $creditrequest;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTApipicklist
     */
    public function getPicklist()
    {
        return $this->picklist;
    }

    /**
     * @param \PaymentAssist\Type\CTApipicklist $picklist
     * @return CTSearchDefinition
     */
    public function withPicklist($picklist)
    {
        $new = clone $this;
        $new->picklist = $picklist;

        return $new;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return CTSearchDefinition
     */
    public function withToken($token)
    {
        $new = clone $this;
        $new->token = $token;

        return $new;
    }


}

