<?php

namespace PaymentAssist\Type;

class CTOutputaddress
{
    /**
     * Output structure for a single address line
     *
     * @var string
     */
    private string $_;

    /**
     * @var int
     */
    private int $current;

    /**
     * The type of undeclared address
     * The list of possible values can be obtained from the web method LookupData07a table id = undeclaredaddresstype
     *
     * @var null | int
     */
    private ?int $undeclaredaddresstype = null;

    /**
     * @return string
     */
    public function get_(): string
    {
        return $this->_;
    }

    /**
     * @param string $_
     * @return static
     */
    public function with_(string $_): static
    {
        $new = clone $this;
        $new->_ = $_;

        return $new;
    }

    /**
     * @return int
     */
    public function getCurrent(): int
    {
        return $this->current;
    }

    /**
     * @param int $current
     * @return static
     */
    public function withCurrent(int $current): static
    {
        $new = clone $this;
        $new->current = $current;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getUndeclaredaddresstype(): ?int
    {
        return $this->undeclaredaddresstype;
    }

    /**
     * @param null | int $undeclaredaddresstype
     * @return static
     */
    public function withUndeclaredaddresstype(?int $undeclaredaddresstype): static
    {
        $new = clone $this;
        $new->undeclaredaddresstype = $undeclaredaddresstype;

        return $new;
    }
}

