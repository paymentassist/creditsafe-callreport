<?php

namespace PaymentAssist\Type;

class Associatelinks
{

    /**
     * @var \PaymentAssist\Type\CTOutputassociatelink
     */
    private $associatelink;

    /**
     * @return \PaymentAssist\Type\CTOutputassociatelink
     */
    public function getAssociatelink()
    {
        return $this->associatelink;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputassociatelink $associatelink
     * @return Associatelinks
     */
    public function withAssociatelink($associatelink)
    {
        $new = clone $this;
        $new->associatelink = $associatelink;

        return $new;
    }


}

