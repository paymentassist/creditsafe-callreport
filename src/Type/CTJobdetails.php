<?php

namespace PaymentAssist\Type;

class CTJobdetails
{
    /**
     * Unique identifier for Credit Reports - this is required for subsequent enquiries
     *
     * @var null | string
     */
    private ?string $searchid = null;

    /**
     * Callcredit System Specific Information
     *
     * @var null | string
     */
    private ?string $cast = null;

    /**
     * Callcredit System Specific Information
     *
     * @var null | int
     */
    private ?int $pstv = null;

    /**
     * Callcredit System Specific Information
     *
     * @var null | int
     */
    private ?int $ls = null;

    /**
     * Date and time that Search was carried out
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $searchdate = null;

    /**
     * @return null | string
     */
    public function getSearchid(): ?string
    {
        return $this->searchid;
    }

    /**
     * @param null | string $searchid
     * @return static
     */
    public function withSearchid(?string $searchid): static
    {
        $new = clone $this;
        $new->searchid = $searchid;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCast(): ?string
    {
        return $this->cast;
    }

    /**
     * @param null | string $cast
     * @return static
     */
    public function withCast(?string $cast): static
    {
        $new = clone $this;
        $new->cast = $cast;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getPstv(): ?int
    {
        return $this->pstv;
    }

    /**
     * @param null | int $pstv
     * @return static
     */
    public function withPstv(?int $pstv): static
    {
        $new = clone $this;
        $new->pstv = $pstv;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getLs(): ?int
    {
        return $this->ls;
    }

    /**
     * @param null | int $ls
     * @return static
     */
    public function withLs(?int $ls): static
    {
        $new = clone $this;
        $new->ls = $ls;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getSearchdate(): ?\DateTimeInterface
    {
        return $this->searchdate;
    }

    /**
     * @param null | \DateTimeInterface $searchdate
     * @return static
     */
    public function withSearchdate(?\DateTimeInterface $searchdate): static
    {
        $new = clone $this;
        $new->searchdate = $searchdate;

        return $new;
    }
}

