<?php

namespace PaymentAssist\Type;

class CTOutputlinkaddresses
{

    /**
     * @var \PaymentAssist\Type\CTOutputlinkaddress
     */
    private $address;

    /**
     * @return \PaymentAssist\Type\CTOutputlinkaddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputlinkaddress $address
     * @return CTOutputlinkaddresses
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }


}

