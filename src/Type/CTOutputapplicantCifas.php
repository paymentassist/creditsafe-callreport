<?php

namespace PaymentAssist\Type;

class CTOutputapplicantCifas
{
    /**
     * Output structure for a CIFAS Filing
     * This is only returned if CIFAS data is setup to be returned in admin
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputcifasfiling>
     */
    private array $filing;

    /**
     * Output structure for a CIFAS Plus Case
     * This is only returned if CIFAS+ data is setup to be returned in admin
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputcifascase>
     */
    private array $case;

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputcifasfiling>
     */
    public function getFiling(): array
    {
        return $this->filing;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputcifasfiling> $filing
     * @return static
     */
    public function withFiling(array $filing): static
    {
        $new = clone $this;
        $new->filing = $filing;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputcifascase>
     */
    public function getCase(): array
    {
        return $this->case;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputcifascase> $case
     * @return static
     */
    public function withCase(array $case): static
    {
        $new = clone $this;
        $new->case = $case;

        return $new;
    }
}

