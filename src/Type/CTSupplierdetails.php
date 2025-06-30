<?php

namespace PaymentAssist\Type;

class CTSupplierdetails
{
    /**
     * Supplier name
     *
     * @var null | string
     */
    private ?string $suppliername = null;

    /**
     * Supplier type code
     * The list of possible values can be obtained from the web method LookupData07a table id = suppliertype
     *
     * @var null | string
     */
    private ?string $suppliertypecode = null;

    /**
     * @return null | string
     */
    public function getSuppliername() : ?string
    {
        return $this->suppliername;
    }

    /**
     * @param null | string $suppliername
     * @return static
     */
    public function withSuppliername(?string $suppliername) : static
    {
        $new = clone $this;
        $new->suppliername = $suppliername;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSuppliertypecode() : ?string
    {
        return $this->suppliertypecode;
    }

    /**
     * @param null | string $suppliertypecode
     * @return static
     */
    public function withSuppliertypecode(?string $suppliertypecode) : static
    {
        $new = clone $this;
        $new->suppliertypecode = $suppliertypecode;

        return $new;
    }
}

