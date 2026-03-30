<?php

namespace PaymentAssist\Type;

class CTOutputcifascase
{
    /**
     * Each Case within FIND is identified by a unique reference number
     *
     * @var int
     */
    private int $caseid;

    /**
     * CIFAS
     *
     * @var \PaymentAssist\Type\CTOutputcifascasedata
     */
    private \PaymentAssist\Type\CTOutputcifascasedata $details;

    /**
     * @var \PaymentAssist\Type\CTOutputcifascaseDmrs
     */
    private \PaymentAssist\Type\CTOutputcifascaseDmrs $dmrs;

    /**
     * Set of CIFAS Filing Dispute and Correction Notices
     *
     * @var array<int<0,max>, \PaymentAssist\Type\CTOutputnotice>
     */
    private array $notice;

    /**
     * @return int
     */
    public function getCaseid(): int
    {
        return $this->caseid;
    }

    /**
     * @param int $caseid
     * @return static
     */
    public function withCaseid(int $caseid): static
    {
        $new = clone $this;
        $new->caseid = $caseid;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputcifascasedata
     */
    public function getDetails(): \PaymentAssist\Type\CTOutputcifascasedata
    {
        return $this->details;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputcifascasedata $details
     * @return static
     */
    public function withDetails(\PaymentAssist\Type\CTOutputcifascasedata $details): static
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTOutputcifascaseDmrs
     */
    public function getDmrs(): \PaymentAssist\Type\CTOutputcifascaseDmrs
    {
        return $this->dmrs;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputcifascaseDmrs $dmrs
     * @return static
     */
    public function withDmrs(\PaymentAssist\Type\CTOutputcifascaseDmrs $dmrs): static
    {
        $new = clone $this;
        $new->dmrs = $dmrs;

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

