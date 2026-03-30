<?php

namespace PaymentAssist\Type;

class CTLookupDataResultRow
{
    /**
     * @var mixed
     */
    private mixed $value;

    /**
     * @var mixed
     */
    private mixed $desc;

    /**
     * @return mixed
     */
    public function getValue(): mixed
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return static
     */
    public function withValue(mixed $value): static
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getDesc(): mixed
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     * @return static
     */
    public function withDesc(mixed $desc): static
    {
        $new = clone $this;
        $new->desc = $desc;

        return $new;
    }
}

