<?php

namespace PaymentAssist\Type;

class CTOutputjudgment
{
    /**
     * Name details as provided on the Judgment
     *
     * @var null | string
     */
    private ?string $name = null;

    /**
     * Address details as provided on the Judgment
     *
     * @var null | \PaymentAssist\Type\CTOutputaddress
     */
    private ?\PaymentAssist\Type\CTOutputaddress $address = null;

    /**
     * Date of birth
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dob = null;

    /**
     * Court name
     *
     * @var string
     */
    private string $courtname;

    /**
     * Court type
     * The list of possible values can be obtained from the web method LookupData07a table id = courttype
     *
     * @var int
     */
    private int $courttype;

    /**
     * Case number
     *
     * @var string
     */
    private string $casenumber;

    /**
     * Status of Judgment
     * The list of possible values can be obtained from the web method LookupData07a table id = judgmentstatus
     *
     * @var string
     */
    private string $status;

    /**
     * Total amount of the Judgment
     *
     * @var int
     */
    private int $amount;

    /**
     * Date of the Judgment
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $judgmentdate = null;

    /**
     * Date that the Judgment was satisfied
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $datesatisfied = null;

    /**
     * Set of Dispute and Correction Notices against the Judgment
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

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
     * @return null | \PaymentAssist\Type\CTOutputaddress
     */
    public function getAddress(): ?\PaymentAssist\Type\CTOutputaddress
    {
        return $this->address;
    }

    /**
     * @param null | \PaymentAssist\Type\CTOutputaddress $address
     * @return static
     */
    public function withAddress(?\PaymentAssist\Type\CTOutputaddress $address): static
    {
        $new = clone $this;
        $new->address = $address;

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
     * @return string
     */
    public function getCourtname(): string
    {
        return $this->courtname;
    }

    /**
     * @param string $courtname
     * @return static
     */
    public function withCourtname(string $courtname): static
    {
        $new = clone $this;
        $new->courtname = $courtname;

        return $new;
    }

    /**
     * @return int
     */
    public function getCourttype(): int
    {
        return $this->courttype;
    }

    /**
     * @param int $courttype
     * @return static
     */
    public function withCourttype(int $courttype): static
    {
        $new = clone $this;
        $new->courttype = $courttype;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasenumber(): string
    {
        return $this->casenumber;
    }

    /**
     * @param string $casenumber
     * @return static
     */
    public function withCasenumber(string $casenumber): static
    {
        $new = clone $this;
        $new->casenumber = $casenumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return static
     */
    public function withStatus(string $status): static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return static
     */
    public function withAmount(int $amount): static
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getJudgmentdate(): ?\DateTimeInterface
    {
        return $this->judgmentdate;
    }

    /**
     * @param null | \DateTimeInterface $judgmentdate
     * @return static
     */
    public function withJudgmentdate(?\DateTimeInterface $judgmentdate): static
    {
        $new = clone $this;
        $new->judgmentdate = $judgmentdate;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDatesatisfied(): ?\DateTimeInterface
    {
        return $this->datesatisfied;
    }

    /**
     * @param null | \DateTimeInterface $datesatisfied
     * @return static
     */
    public function withDatesatisfied(?\DateTimeInterface $datesatisfied): static
    {
        $new = clone $this;
        $new->datesatisfied = $datesatisfied;

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
}

