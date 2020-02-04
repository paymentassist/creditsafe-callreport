<?php

namespace PaymentAssist\Type;

class CTOutputaddress
{

    /**
     * @var string
     */
    private $_;

    /**
     * @var int
     */
    private $current;

    /**
     * @var int
     */
    private $undeclaredaddresstype;

    /**
     * @return string
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param string $_
     * @return CTOutputaddress
     */
    public function with_($_)
    {
        $new = clone $this;
        $new->_ = $_;

        return $new;
    }

    /**
     * @return int
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param int $current
     * @return CTOutputaddress
     */
    public function withCurrent($current)
    {
        $new = clone $this;
        $new->current = $current;

        return $new;
    }

    /**
     * @return int
     */
    public function getUndeclaredaddresstype()
    {
        return $this->undeclaredaddresstype;
    }

    /**
     * @param int $undeclaredaddresstype
     * @return CTOutputaddress
     */
    public function withUndeclaredaddresstype($undeclaredaddresstype)
    {
        $new = clone $this;
        $new->undeclaredaddresstype = $undeclaredaddresstype;

        return $new;
    }


}

