<?php

namespace PaymentAssist\Type;

class CTSearchapplicant
{
    /**
     * Set of addresses (current and previous) for a specific applicant
     *
     * @var non-empty-array<int<0,2>, \PaymentAssist\Type\CTInputaddress>
     */
    private array $address;

    /**
     * Set of names (current and aliases) for a specific applicant
     *
     * @var non-empty-array<int<0,1>, \PaymentAssist\Type\CTInputname>
     */
    private array $name;

    /**
     * Applicant's date of birth
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dob = null;

    /**
     * A value of 1 indicates a household override check is requested for the applicant
     *
     * @var null | int
     */
    private ?int $hho = null;

    /**
     * A value of 1 indicates that the applicant has opted out of use of third party data
     *
     * @var null | int
     */
    private ?int $tpoptout = null;

    /**
     * Demographic information for the applicant
     *
     * @var null | \PaymentAssist\Type\CTApplicantdemographics
     */
    private ?\PaymentAssist\Type\CTApplicantdemographics $applicantdemographics = null;

    /**
     * @return non-empty-array<int<0,2>, \PaymentAssist\Type\CTInputaddress>
     */
    public function getAddress(): array
    {
        return $this->address;
    }

    /**
     * @param non-empty-array<int<0,2>, \PaymentAssist\Type\CTInputaddress> $address
     * @return static
     */
    public function withAddress(array $address): static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,1>, \PaymentAssist\Type\CTInputname>
     */
    public function getName(): array
    {
        return $this->name;
    }

    /**
     * @param non-empty-array<int<0,1>, \PaymentAssist\Type\CTInputname> $name
     * @return static
     */
    public function withName(array $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDob(): ?\DateTimeInterface
    {
        return $this->dob;
    }

    /**
     * @param null | \DateTimeInterface $dob
     * @return static
     */
    public function withDob(?\DateTimeInterface $dob): static
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getHho(): ?int
    {
        return $this->hho;
    }

    /**
     * @param null | int $hho
     * @return static
     */
    public function withHho(?int $hho): static
    {
        $new = clone $this;
        $new->hho = $hho;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTpoptout(): ?int
    {
        return $this->tpoptout;
    }

    /**
     * @param null | int $tpoptout
     * @return static
     */
    public function withTpoptout(?int $tpoptout): static
    {
        $new = clone $this;
        $new->tpoptout = $tpoptout;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTApplicantdemographics
     */
    public function getApplicantdemographics(): ?\PaymentAssist\Type\CTApplicantdemographics
    {
        return $this->applicantdemographics;
    }

    /**
     * @param null | \PaymentAssist\Type\CTApplicantdemographics $applicantdemographics
     * @return static
     */
    public function withApplicantdemographics(?\PaymentAssist\Type\CTApplicantdemographics $applicantdemographics): static
    {
        $new = clone $this;
        $new->applicantdemographics = $applicantdemographics;

        return $new;
    }
}

