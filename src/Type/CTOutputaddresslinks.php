<?php

namespace PaymentAssist\Type;

class CTOutputaddresslinks
{
    /**
     * Output structure for an Address Link
     *
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputaddresslink>
     */
    private array $link;

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputaddresslink>
     */
    public function getLink(): array
    {
        return $this->link;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputaddresslink> $link
     * @return static
     */
    public function withLink(array $link): static
    {
        $new = clone $this;
        $new->link = $link;

        return $new;
    }
}

