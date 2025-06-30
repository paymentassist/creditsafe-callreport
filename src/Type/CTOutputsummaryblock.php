<?php

namespace PaymentAssist\Type;

class CTOutputsummaryblock
{
    /**
     * @var null | \PaymentAssist\Type\CTSummarysearches
     */
    private ?\PaymentAssist\Type\CTSummarysearches $searches = null;

    /**
     * Judgments Summary
     *
     * @var null | \PaymentAssist\Type\CTSummaryjudgment
     */
    private ?\PaymentAssist\Type\CTSummaryjudgment $judgments = null;

    /**
     * Insolvencies Summary
     *
     * @var null | \PaymentAssist\Type\CTSummarybai
     */
    private ?\PaymentAssist\Type\CTSummarybai $bais = null;

    /**
     * Notices Summary
     *
     * @var \PaymentAssist\Type\CTSummarynotices
     */
    private \PaymentAssist\Type\CTSummarynotices $notices;

    /**
     * Links Summary
     *
     * @var null | \PaymentAssist\Type\CTSummarylinks
     */
    private ?\PaymentAssist\Type\CTSummarylinks $links = null;

    /**
     * CIFAS Summary. Not returned if CIFAS is not enabled or allowed
     *
     * @var null | \PaymentAssist\Type\CTSummarycifas
     */
    private ?\PaymentAssist\Type\CTSummarycifas $cifas = null;

    /**
     * RTR Account Summary. Not returned if RTR data is not enabled or allowed
     *
     * @var null | \PaymentAssist\Type\CTSummaryrtr
     */
    private ?\PaymentAssist\Type\CTSummaryrtr $rtr = null;

    /**
     * SHARE Account Summary. Not returned if SHARE data is not enabled or allowed
     *
     * @var null | \PaymentAssist\Type\CTSummaryshare
     */
    private ?\PaymentAssist\Type\CTSummaryshare $share = null;

    /**
     * Behavoural Data Summary. Not returned if Behavoural Data is not enabled or allowed
     *
     * @var null | \PaymentAssist\Type\CTSummarybds
     */
    private ?\PaymentAssist\Type\CTSummarybds $bds = null;

    /**
     * Impaired Credit History Summary. Not returned if Impaired Credit History is not enabled or allowed
     *
     * @var null | \PaymentAssist\Type\CTSummaryich
     */
    private ?\PaymentAssist\Type\CTSummaryich $ich = null;

    /**
     * Indebtiness Summary. Not returned if SHARE data is not enabled or allowed
     *
     * @var null | \PaymentAssist\Type\CTSummaryindebt
     */
    private ?\PaymentAssist\Type\CTSummaryindebt $indebt = null;

    /**
     * Third Party Data Summary. Not returned if Third Party Data is not enabled or allowed
     *
     * @var null | \PaymentAssist\Type\CTSummarytpd
     */
    private ?\PaymentAssist\Type\CTSummarytpd $tpd = null;

    /**
     * Summarised address confirmation for entered addresses.
     *
     * @var \PaymentAssist\Type\CTSummaryaddress
     */
    private \PaymentAssist\Type\CTSummaryaddress $summaryaddress;

    /**
     * Residency confirmations for each address (including current address)
     *
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\CTSummaryresidency>
     */
    private array $address;

    /**
     * @return null | \PaymentAssist\Type\CTSummarysearches
     */
    public function getSearches() : ?\PaymentAssist\Type\CTSummarysearches
    {
        return $this->searches;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummarysearches $searches
     * @return static
     */
    public function withSearches(?\PaymentAssist\Type\CTSummarysearches $searches) : static
    {
        $new = clone $this;
        $new->searches = $searches;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummaryjudgment
     */
    public function getJudgments() : ?\PaymentAssist\Type\CTSummaryjudgment
    {
        return $this->judgments;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummaryjudgment $judgments
     * @return static
     */
    public function withJudgments(?\PaymentAssist\Type\CTSummaryjudgment $judgments) : static
    {
        $new = clone $this;
        $new->judgments = $judgments;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummarybai
     */
    public function getBais() : ?\PaymentAssist\Type\CTSummarybai
    {
        return $this->bais;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummarybai $bais
     * @return static
     */
    public function withBais(?\PaymentAssist\Type\CTSummarybai $bais) : static
    {
        $new = clone $this;
        $new->bais = $bais;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummarynotices
     */
    public function getNotices() : \PaymentAssist\Type\CTSummarynotices
    {
        return $this->notices;
    }

    /**
     * @param \PaymentAssist\Type\CTSummarynotices $notices
     * @return static
     */
    public function withNotices(\PaymentAssist\Type\CTSummarynotices $notices) : static
    {
        $new = clone $this;
        $new->notices = $notices;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummarylinks
     */
    public function getLinks() : ?\PaymentAssist\Type\CTSummarylinks
    {
        return $this->links;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummarylinks $links
     * @return static
     */
    public function withLinks(?\PaymentAssist\Type\CTSummarylinks $links) : static
    {
        $new = clone $this;
        $new->links = $links;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummarycifas
     */
    public function getCifas() : ?\PaymentAssist\Type\CTSummarycifas
    {
        return $this->cifas;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummarycifas $cifas
     * @return static
     */
    public function withCifas(?\PaymentAssist\Type\CTSummarycifas $cifas) : static
    {
        $new = clone $this;
        $new->cifas = $cifas;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummaryrtr
     */
    public function getRtr() : ?\PaymentAssist\Type\CTSummaryrtr
    {
        return $this->rtr;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummaryrtr $rtr
     * @return static
     */
    public function withRtr(?\PaymentAssist\Type\CTSummaryrtr $rtr) : static
    {
        $new = clone $this;
        $new->rtr = $rtr;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummaryshare
     */
    public function getShare() : ?\PaymentAssist\Type\CTSummaryshare
    {
        return $this->share;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummaryshare $share
     * @return static
     */
    public function withShare(?\PaymentAssist\Type\CTSummaryshare $share) : static
    {
        $new = clone $this;
        $new->share = $share;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummarybds
     */
    public function getBds() : ?\PaymentAssist\Type\CTSummarybds
    {
        return $this->bds;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummarybds $bds
     * @return static
     */
    public function withBds(?\PaymentAssist\Type\CTSummarybds $bds) : static
    {
        $new = clone $this;
        $new->bds = $bds;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummaryich
     */
    public function getIch() : ?\PaymentAssist\Type\CTSummaryich
    {
        return $this->ich;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummaryich $ich
     * @return static
     */
    public function withIch(?\PaymentAssist\Type\CTSummaryich $ich) : static
    {
        $new = clone $this;
        $new->ich = $ich;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummaryindebt
     */
    public function getIndebt() : ?\PaymentAssist\Type\CTSummaryindebt
    {
        return $this->indebt;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummaryindebt $indebt
     * @return static
     */
    public function withIndebt(?\PaymentAssist\Type\CTSummaryindebt $indebt) : static
    {
        $new = clone $this;
        $new->indebt = $indebt;

        return $new;
    }

    /**
     * @return null | \PaymentAssist\Type\CTSummarytpd
     */
    public function getTpd() : ?\PaymentAssist\Type\CTSummarytpd
    {
        return $this->tpd;
    }

    /**
     * @param null | \PaymentAssist\Type\CTSummarytpd $tpd
     * @return static
     */
    public function withTpd(?\PaymentAssist\Type\CTSummarytpd $tpd) : static
    {
        $new = clone $this;
        $new->tpd = $tpd;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummaryaddress
     */
    public function getSummaryaddress() : \PaymentAssist\Type\CTSummaryaddress
    {
        return $this->summaryaddress;
    }

    /**
     * @param \PaymentAssist\Type\CTSummaryaddress $summaryaddress
     * @return static
     */
    public function withSummaryaddress(\PaymentAssist\Type\CTSummaryaddress $summaryaddress) : static
    {
        $new = clone $this;
        $new->summaryaddress = $summaryaddress;

        return $new;
    }

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\CTSummaryresidency>
     */
    public function getAddress() : array
    {
        return $this->address;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\CTSummaryresidency> $address
     * @return static
     */
    public function withAddress(array $address) : static
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }
}

