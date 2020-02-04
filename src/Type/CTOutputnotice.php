<?php

namespace PaymentAssist\Type;

class CTOutputnotice
{

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $refnum;

    /**
     * @var \DateTimeInterface
     */
    private $dateraised;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \PaymentAssist\Type\CTOutputaddress
     */
    private $address;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return CTOutputnotice
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return string
     */
    public function getRefnum()
    {
        return $this->refnum;
    }

    /**
     * @param string $refnum
     * @return CTOutputnotice
     */
    public function withRefnum($refnum)
    {
        $new = clone $this;
        $new->refnum = $refnum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateraised()
    {
        return $this->dateraised;
    }

    /**
     * @param \DateTimeInterface $dateraised
     * @return CTOutputnotice
     */
    public function withDateraised($dateraised)
    {
        $new = clone $this;
        $new->dateraised = $dateraised;

        return $new;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return CTOutputnotice
     */
    public function withText($text)
    {
        $new = clone $this;
        $new->text = $text;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CTOutputnotice
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputaddress $address
     * @return CTOutputnotice
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }


}

