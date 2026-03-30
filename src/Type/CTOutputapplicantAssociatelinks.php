<?php

namespace PaymentAssist\Type;

class CTOutputapplicantAssociatelinks
{
    /**
     * Output structure for an Associate Link
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputassociatelink>
     */
    private array $associatelink;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputassociatelink>
     */
    public function getAssociatelink(): array
    {
        return $this->associatelink;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputassociatelink> $associatelink
     * @return static
     */
    public function withAssociatelink(array $associatelink): static
    {
        $new = clone $this;
        $new->associatelink = $associatelink;

        return $new;
    }
}

