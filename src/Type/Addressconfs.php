<?php

namespace PaymentAssist\Type;

class Addressconfs
{

    /**
     * @var \PaymentAssist\Type\CTOutputaddressconf
     */
    private $addressconf;

    /**
     * @return \PaymentAssist\Type\CTOutputaddressconf
     */
    public function getAddressconf()
    {
        return $this->addressconf;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddressconf $addressconf
     * @return Addressconfs
     */
    public function withAddressconf($addressconf)
    {
        $new = clone $this;
        $new->addressconf = $addressconf;

        return $new;
    }


}

