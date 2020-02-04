<?php

namespace PaymentAssist\Type;

class CTOutputlinkaddress
{

    /**
     * @var \PaymentAssist\Type\CTOutputaddress
     */
    private $_;

    /**
     * @var int
     */
    private $addressid;

    /**
     * @var int
     */
    private $declared;

    /**
     * @var string
     */
    private $navlinkid;

    /**
     * @return \PaymentAssist\Type\CTOutputaddress
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddress $_
     * @return CTOutputlinkaddress
     */
    public function with_($_)
    {
        $new = clone $this;
        $new->_ = $_;

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
     * @return CTOutputlinkaddress
     */
    public function withAddressid($addressid)
    {
        $new = clone $this;
        $new->addressid = $addressid;

        return $new;
    }

    /**
     * @return int
     */
    public function getDeclared()
    {
        return $this->declared;
    }

    /**
     * @param int $declared
     * @return CTOutputlinkaddress
     */
    public function withDeclared($declared)
    {
        $new = clone $this;
        $new->declared = $declared;

        return $new;
    }

    /**
     * @return string
     */
    public function getNavlinkid()
    {
        return $this->navlinkid;
    }

    /**
     * @param string $navlinkid
     * @return CTOutputlinkaddress
     */
    public function withNavlinkid($navlinkid)
    {
        $new = clone $this;
        $new->navlinkid = $navlinkid;

        return $new;
    }


}

