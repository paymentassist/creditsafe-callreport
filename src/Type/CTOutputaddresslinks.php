<?php

namespace PaymentAssist\Type;

class CTOutputaddresslinks
{

    /**
     * @var \PaymentAssist\Type\CTOutputaddresslink
     */
    private $link;

    /**
     * @return \PaymentAssist\Type\CTOutputaddresslink
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddresslink $link
     * @return CTOutputaddresslinks
     */
    public function withLink($link)
    {
        $new = clone $this;
        $new->link = $link;

        return $new;
    }


}

