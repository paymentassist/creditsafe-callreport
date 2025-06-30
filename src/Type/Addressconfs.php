<?php

namespace PaymentAssist\Type;

class Addressconfs
{
    /**
     * Output structure for address confirmation
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputaddressconf>
     */
    private array $addressconf;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputaddressconf>
     */
    public function getAddressconf() : array
    {
        return $this->addressconf;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputaddressconf> $addressconf
     * @return static
     */
    public function withAddressconf(array $addressconf) : static
    {
        $new = clone $this;
        $new->addressconf = $addressconf;

        return $new;
    }
}

