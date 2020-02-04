<?php

namespace PaymentAssist\Type;

class CTInputaddressandmatches
{

    /**
     * @var \PaymentAssist\Type\CTAddress
     */
    private $addressinput;

    /**
     * @var \PaymentAssist\Type\Fullmatches
     */
    private $fullmatches;

    /**
     * @var int
     */
    private $addressid;

    /**
     * @return \PaymentAssist\Type\CTAddress
     */
    public function getAddressinput()
    {
        return $this->addressinput;
    }

    /**
     * @param \PaymentAssist\Type\CTAddress $addressinput
     * @return CTInputaddressandmatches
     */
    public function withAddressinput($addressinput)
    {
        $new = clone $this;
        $new->addressinput = $addressinput;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\Fullmatches
     */
    public function getFullmatches()
    {
        return $this->fullmatches;
    }

    /**
     * @param \PaymentAssist\Type\Fullmatches $fullmatches
     * @return CTInputaddressandmatches
     */
    public function withFullmatches($fullmatches)
    {
        $new = clone $this;
        $new->fullmatches = $fullmatches;

        return $new;
    }

    /**
     * @return int
     */
    public function getAddressid()
    {
        return $this->addressid;
    }

    /**
     * @param int $addressid
     * @return CTInputaddressandmatches
     */
    public function withAddressid($addressid)
    {
        $new = clone $this;
        $new->addressid = $addressid;

        return $new;
    }


}

