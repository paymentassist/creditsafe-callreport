<?php

namespace PaymentAssist\Type;

class CTAddressconfresident
{
    /**
     * Confirmation of individual's details
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Effective duration of residency (based on search purpose and Electoral Roll Opt-out history)
     *
     * @var null | mixed
     */
    private mixed $duration = null;

    /**
     * Effective start date of residency (based on search purpose and Electoral Roll Opt-out history)
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $startdate = null;

    /**
     * Effective end date of residency (based on search purpose and Electoral Roll Opt-out history)
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $enddate = null;

    /**
     * Electoral Roll validation identifier
     * The list of possible values can be obtained from the web method LookupData07a table id = erstatuscode
     *
     * @var int
     */
    private int $ervalid;

    /**
     * Ordered list of Electoral Roll History items - most recent first.
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputerhistory>
     */
    private array $erhistory;

    /**
     * Set of Dispute and Correction Notices against a Resident
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * Indicates whether resident is individual match (matches applicant's full name or alias), surname match, house match, CIFAS match or no match.
     * The list of possible values can be obtained from the web method LookupData07a table id = appmatch
     *
     * @var string
     */
    private string $matchtype;

    /**
     * A value of 1 indicates that the resident is based on the current name
     *
     * @var int
     */
    private int $currentname;

    /**
     * A value of 1 indicates that the resident is based on a declared alias
     *
     * @var int
     */
    private int $declaredalias;

    /**
     * @return null | string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param null | string $name
     * @return static
     */
    public function withName(?string $name): static
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return null | mixed
     */
    public function getDuration(): mixed
    {
        return $this->duration;
    }

    /**
     * @param null | mixed $duration
     * @return static
     */
    public function withDuration(mixed $duration): static
    {
        $new = clone $this;
        $new->duration = $duration;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getStartdate(): ?\DateTimeInterface
    {
        return $this->startdate;
    }

    /**
     * @param null | \DateTimeInterface $startdate
     * @return static
     */
    public function withStartdate(?\DateTimeInterface $startdate): static
    {
        $new = clone $this;
        $new->startdate = $startdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getEnddate(): ?\DateTimeInterface
    {
        return $this->enddate;
    }

    /**
     * @param null | \DateTimeInterface $enddate
     * @return static
     */
    public function withEnddate(?\DateTimeInterface $enddate): static
    {
        $new = clone $this;
        $new->enddate = $enddate;

        return $new;
    }

    /**
     * @return int
     */
    public function getErvalid(): int
    {
        return $this->ervalid;
    }

    /**
     * @param int $ervalid
     * @return static
     */
    public function withErvalid(int $ervalid): static
    {
        $new = clone $this;
        $new->ervalid = $ervalid;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputerhistory>
     */
    public function getErhistory(): array
    {
        return $this->erhistory;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputerhistory> $erhistory
     * @return static
     */
    public function withErhistory(array $erhistory): static
    {
        $new = clone $this;
        $new->erhistory = $erhistory;

        return $new;
    }

    /**
     * @return array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    public function getNotice(): array
    {
        return $this->notice;
    }

    /**
     * @param array<int<0,max>, \PaymentAssist\Type\CTOutputnotice> $notice
     * @return static
     */
    public function withNotice(array $notice): static
    {
        $new = clone $this;
        $new->notice = $notice;

        return $new;
    }

    /**
     * @return string
     */
    public function getMatchtype(): string
    {
        return $this->matchtype;
    }

    /**
     * @param string $matchtype
     * @return static
     */
    public function withMatchtype(string $matchtype): static
    {
        $new = clone $this;
        $new->matchtype = $matchtype;

        return $new;
    }

    /**
     * @return int
     */
    public function getCurrentname(): int
    {
        return $this->currentname;
    }

    /**
     * @param int $currentname
     * @return static
     */
    public function withCurrentname(int $currentname): static
    {
        $new = clone $this;
        $new->currentname = $currentname;

        return $new;
    }

    /**
     * @return int
     */
    public function getDeclaredalias(): int
    {
        return $this->declaredalias;
    }

    /**
     * @param int $declaredalias
     * @return static
     */
    public function withDeclaredalias(int $declaredalias): static
    {
        $new = clone $this;
        $new->declaredalias = $declaredalias;

        return $new;
    }
}

