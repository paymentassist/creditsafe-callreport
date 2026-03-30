<?php

namespace PaymentAssist\Type;

class CTOutputdemographicsAge
{
    /**
     * Age 0-17 Index
     *
     * @var null | int
     */
    private ?int $age0_17 = null;

    /**
     * Age 18-24 Index
     *
     * @var null | int
     */
    private ?int $age18_24 = null;

    /**
     * Age 25-35 Index
     *
     * @var null | int
     */
    private ?int $age25_34 = null;

    /**
     * Age 35-44 Index
     *
     * @var null | int
     */
    private ?int $age35_44 = null;

    /**
     * Age 45-54 Index
     *
     * @var null | int
     */
    private ?int $age45_54 = null;

    /**
     * Age 55-64 Index
     *
     * @var null | int
     */
    private ?int $age55_64 = null;

    /**
     * Age 65-74 Index
     *
     * @var null | int
     */
    private ?int $age65_74 = null;

    /**
     * Age 75 plus Index
     *
     * @var null | int
     */
    private ?int $age75pl = null;

    /**
     * @return null | int
     */
    public function getAge0_17(): ?int
    {
        return $this->age0_17;
    }

    /**
     * @param null | int $age0_17
     * @return static
     */
    public function withAge0_17(?int $age0_17): static
    {
        $new = clone $this;
        $new->age0_17 = $age0_17;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAge18_24(): ?int
    {
        return $this->age18_24;
    }

    /**
     * @param null | int $age18_24
     * @return static
     */
    public function withAge18_24(?int $age18_24): static
    {
        $new = clone $this;
        $new->age18_24 = $age18_24;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAge25_34(): ?int
    {
        return $this->age25_34;
    }

    /**
     * @param null | int $age25_34
     * @return static
     */
    public function withAge25_34(?int $age25_34): static
    {
        $new = clone $this;
        $new->age25_34 = $age25_34;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAge35_44(): ?int
    {
        return $this->age35_44;
    }

    /**
     * @param null | int $age35_44
     * @return static
     */
    public function withAge35_44(?int $age35_44): static
    {
        $new = clone $this;
        $new->age35_44 = $age35_44;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAge45_54(): ?int
    {
        return $this->age45_54;
    }

    /**
     * @param null | int $age45_54
     * @return static
     */
    public function withAge45_54(?int $age45_54): static
    {
        $new = clone $this;
        $new->age45_54 = $age45_54;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAge55_64(): ?int
    {
        return $this->age55_64;
    }

    /**
     * @param null | int $age55_64
     * @return static
     */
    public function withAge55_64(?int $age55_64): static
    {
        $new = clone $this;
        $new->age55_64 = $age55_64;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAge65_74(): ?int
    {
        return $this->age65_74;
    }

    /**
     * @param null | int $age65_74
     * @return static
     */
    public function withAge65_74(?int $age65_74): static
    {
        $new = clone $this;
        $new->age65_74 = $age65_74;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getAge75pl(): ?int
    {
        return $this->age75pl;
    }

    /**
     * @param null | int $age75pl
     * @return static
     */
    public function withAge75pl(?int $age75pl): static
    {
        $new = clone $this;
        $new->age75pl = $age75pl;

        return $new;
    }
}

