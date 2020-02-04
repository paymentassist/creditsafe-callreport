<?php

namespace PaymentAssist\Type;

class Fullmatch
{

    /**
     * @var \PaymentAssist\Type\Addressmatch
     */
    private $addressmatch;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $selected;

    /**
     * @return \PaymentAssist\Type\Addressmatch
     */
    public function getAddressmatch()
    {
        return $this->addressmatch;
    }

    /**
     * @param \PaymentAssist\Type\Addressmatch $addressmatch
     * @return Fullmatch
     */
    public function withAddressmatch($addressmatch)
    {
        $new = clone $this;
        $new->addressmatch = $addressmatch;

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
     * @return Fullmatch
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return int
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * @param int $selected
     * @return Fullmatch
     */
    public function withSelected($selected)
    {
        $new = clone $this;
        $new->selected = $selected;

        return $new;
    }


}

