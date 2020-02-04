<?php

namespace PaymentAssist\Type;

class CTOutputaddressconf
{

    /**
     * @var \PaymentAssist\Type\CTOutputaddress
     */
    private $address;

    /**
     * @var \PaymentAssist\Type\CTAddressconfresident
     */
    private $resident;

    /**
     * @var int
     */
    private $pafvalid;

    /**
     * @var int
     */
    private $otherresidents;

    /**
     * @return \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddress $address
     * @return CTOutputaddressconf
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTAddressconfresident
     */
    public function getResident()
    {
        return $this->resident;
    }

    /**
     * @param \PaymentAssist\Type\CTAddressconfresident $resident
     * @return CTOutputaddressconf
     */
    public function withResident($resident)
    {
        $new = clone $this;
        $new->resident = $resident;

        return $new;
    }

    /**
     * @return int
     */
    public function getPafvalid()
    {
        return $this->pafvalid;
    }

    /**
     * @param int $pafvalid
     * @return CTOutputaddressconf
     */
    public function withPafvalid($pafvalid)
    {
        $new = clone $this;
        $new->pafvalid = $pafvalid;

        return $new;
    }

    /**
     * @return int
     */
    public function getOtherresidents()
    {
        return $this->otherresidents;
    }

    /**
     * @param int $otherresidents
     * @return CTOutputaddressconf
     */
    public function withOtherresidents($otherresidents)
    {
        $new = clone $this;
        $new->otherresidents = $otherresidents;

        return $new;
    }


}

