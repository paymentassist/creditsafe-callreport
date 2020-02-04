<?php

namespace PaymentAssist\Type;

class CTSupplierdetails
{

    /**
     * @var string
     */
    private $suppliername;

    /**
     * @var string
     */
    private $suppliertypecode;

    /**
     * @return string
     */
    public function getSuppliername()
    {
        return $this->suppliername;
    }

    /**
     * @param string $suppliername
     * @return CTSupplierdetails
     */
    public function withSuppliername($suppliername)
    {
        $new = clone $this;
        $new->suppliername = $suppliername;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuppliertypecode()
    {
        return $this->suppliertypecode;
    }

    /**
     * @param string $suppliertypecode
     * @return CTSupplierdetails
     */
    public function withSuppliertypecode($suppliertypecode)
    {
        $new = clone $this;
        $new->suppliertypecode = $suppliertypecode;

        return $new;
    }


}

