<?php

namespace PaymentAssist\Type;

class CTOutputnotice
{
    /**
     * Notice Type (Correction or Dispute)
     * The list of possible values can be obtained from the web method LookupData07a table id = noticetype
     *
     * @var null | string
     */
    private ?string $type = null;

    /**
     * Notice Reference Number
     *
     * @var string
     */
    private string $refnum;

    /**
     * Date that the Notice was raised
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $dateraised;

    /**
     * Text for Notice of Correction
     *
     * @var null | string
     */
    private ?string $text = null;

    /**
     * Name details as provided on the Notice of Correction
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Address details as provided on the Notice of Correction
     *
     * @var null | \PaymentAssist\Type\CTOutputaddress
     */
    private ?\PaymentAssist\Type\CTOutputaddress $address = null;

    /**
     * @return null | string
     */
    public function getType() : ?string
    {
        return $this->type;
    }

    /**
     * @param null | string $type
     * @return static
     */
    public function withType(?string $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getRefnum() : string
    {
        return $this->refnum;
    }

    /**
     * @param string $refnum
     * @return static
     */
    public function withRefnum(string $refnum) : static
    {
        $new = clone $this;
        $new->refnum = $refnum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateraised() : \DateTimeInterface
    {
        return $this->dateraised;
    }

    /**
     * @param \DateTimeInterface $dateraised
     * @return static
     */
    public function withDateraised(\DateTimeInterface $dateraised) : static
    {
        $new = clone $this;
        $new->dateraised = $dateraised;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getText() : ?string
    {
        return $this->text;
    }

    /**
     * @param null | string $text
     * @return static
     */
    public function withText(?string $text) : static
    {
        $new = clone $this;
        $new->text = $text;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name) : static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress() : ?\PaymentAssist\Type\CTOutputaddress
    {
        return $this->address;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputaddress $address
     * @return static
     */
    public function withAddress(?\PaymentAssist\Type\CTOutputaddress $address) : static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }
}

