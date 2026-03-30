<?php

namespace PaymentAssist\Type;

class CTOutputcifassubjectCompany
{
    /**
     * Company name
     *
     * @var string
     */
    private string $name;

    /**
     * Registered Company number
     *
     * @var null | string
     */
    private ?string $number = null;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return static
     */
    public function withName(string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * @param null | string $number
     * @return static
     */
    public function withNumber(?string $number): static
    {
        $new = clone $this;
        $new->number = $number;

        return $new;
    }
}

