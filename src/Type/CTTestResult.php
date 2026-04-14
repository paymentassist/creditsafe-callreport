<?php

namespace PaymentAssist\Type;

class CTTestResult
{
    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $datetime;

    /**
     * @return \DateTimeInterface
     */
    public function getDatetime(): \DateTimeInterface
    {
        return $this->datetime;
    }

    /**
     * @param \DateTimeInterface $datetime
     * @return static
     */
    public function withDatetime(\DateTimeInterface $datetime): static
    {
        $new = clone $this;
        $new->datetime = $datetime;

        return $new;
    }
}

