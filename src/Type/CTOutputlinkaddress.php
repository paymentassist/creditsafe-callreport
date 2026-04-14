<?php

namespace PaymentAssist\Type;

class CTOutputlinkaddress extends CTOutputaddress
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
     * Address id indicator to identify the address later within an Address Link
     *
     * @var int
     */
    private int $addressid;

    /**
     * A value of 1 indicates that the address declared on the application.
     *
     * @var int
     */
    private int $declared;

    /**
     * Identifier required for Address Link navigation
     *
     * @var null | string
     */
    private ?string $navlinkid = null;

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

    /**
     * @return int
     */
    public function getAddressid(): int
    {
        return $this->addressid;
    }

    /**
     * @param int $addressid
     * @return static
     */
    public function withAddressid(int $addressid): static
    {
        $new = clone $this;
        $new->addressid = $addressid;

        return $new;
    }

    /**
     * @return int
     */
    public function getDeclared(): int
    {
        return $this->declared;
    }

    /**
     * @param int $declared
     * @return static
     */
    public function withDeclared(int $declared): static
    {
        $new = clone $this;
        $new->declared = $declared;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNavlinkid(): ?string
    {
        return $this->navlinkid;
    }

    /**
     * @param null | string $navlinkid
     * @return static
     */
    public function withNavlinkid(?string $navlinkid): static
    {
        $new = clone $this;
        $new->navlinkid = $navlinkid;

        return $new;
    }
}

