<?php

namespace PaymentAssist\Type;

class CTPicklistapplicant
{

    /**
     * @var \PaymentAssist\Type\CTInputaddressandmatches
     */
    private $address;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $reporttype;

    /**
     * @return \PaymentAssist\Type\CTInputaddressandmatches
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTInputaddressandmatches $address
     * @return CTPicklistapplicant
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CTPicklistapplicant
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getReporttype()
    {
        return $this->reporttype;
    }

    /**
     * @param string $reporttype
     * @return CTPicklistapplicant
     */
    public function withReporttype($reporttype)
    {
        $new = clone $this;
        $new->reporttype = $reporttype;

        return $new;
    }


}

