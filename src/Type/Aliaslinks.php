<?php

namespace PaymentAssist\Type;

class Aliaslinks
{

    /**
     * @var \PaymentAssist\Type\CTOutputaliaslink
     */
    private $aliaslink;

    /**
     * @return \PaymentAssist\Type\CTOutputaliaslink
     */
    public function getAliaslink()
    {
        return $this->aliaslink;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaliaslink $aliaslink
     * @return Aliaslinks
     */
    public function withAliaslink($aliaslink)
    {
        $new = clone $this;
        $new->aliaslink = $aliaslink;

        return $new;
    }


}

