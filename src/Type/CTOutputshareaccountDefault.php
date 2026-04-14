<?php

namespace PaymentAssist\Type;

class CTOutputshareaccountDefault
{
    /**
     * Default date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $defdate = null;

    /**
     * Original default balance
     *
     * @var int
     */
    private int $origdefbal;

    /**
     * Termination balance
     *
     * @var null | int
     */
    private ?int $termbal = null;

    /**
     * Default satisfaction date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $defsatdate = null;

    /**
     * Repossession date
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $repodate = null;

    /**
     * @return null | \DateTimeInterface
     */
    public function getDefdate(): ?\DateTimeInterface
    {
        return $this->defdate;
    }

    /**
     * @param null | \DateTimeInterface $defdate
     * @return static
     */
    public function withDefdate(?\DateTimeInterface $defdate): static
    {
        $new = clone $this;
        $new->defdate = $defdate;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrigdefbal(): int
    {
        return $this->origdefbal;
    }

    /**
     * @param int $origdefbal
     * @return static
     */
    public function withOrigdefbal(int $origdefbal): static
    {
        $new = clone $this;
        $new->origdefbal = $origdefbal;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTermbal(): ?int
    {
        return $this->termbal;
    }

    /**
     * @param null | int $termbal
     * @return static
     */
    public function withTermbal(?int $termbal): static
    {
        $new = clone $this;
        $new->termbal = $termbal;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDefsatdate(): ?\DateTimeInterface
    {
        return $this->defsatdate;
    }

    /**
     * @param null | \DateTimeInterface $defsatdate
     * @return static
     */
    public function withDefsatdate(?\DateTimeInterface $defsatdate): static
    {
        $new = clone $this;
        $new->defsatdate = $defsatdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getRepodate(): ?\DateTimeInterface
    {
        return $this->repodate;
    }

    /**
     * @param null | \DateTimeInterface $repodate
     * @return static
     */
    public function withRepodate(?\DateTimeInterface $repodate): static
    {
        $new = clone $this;
        $new->repodate = $repodate;

        return $new;
    }
}

