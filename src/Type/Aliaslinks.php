<?php

namespace PaymentAssist\Type;

class Aliaslinks
{
    /**
     * Set of Alias links
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputaliaslink>
     */
    private array $aliaslink;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputaliaslink>
     */
    public function getAliaslink() : array
    {
        return $this->aliaslink;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputaliaslink> $aliaslink
     * @return static
     */
    public function withAliaslink(array $aliaslink) : static
    {
        $new = clone $this;
        $new->aliaslink = $aliaslink;

        return $new;
    }
}

