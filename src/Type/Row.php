<?php

namespace PaymentAssist\Type;

class Row
{

    /**
     * @var mixed
     */
    private $value;

    /**
     * @var mixed
     */
    private $desc;

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return Row
     */
    public function withValue($value)
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     * @return Row
     */
    public function withDesc($desc)
    {
        $new = clone $this;
        $new->desc = $desc;

        return $new;
    }


}

