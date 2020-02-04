<?php

namespace PaymentAssist\Type;

class CTOutputsummaryblock
{

    /**
     * @var \PaymentAssist\Type\CTSummarysearches
     */
    private $searches;

    /**
     * @var \PaymentAssist\Type\CTSummaryjudgment
     */
    private $judgments;

    /**
     * @var \PaymentAssist\Type\CTSummarybai
     */
    private $bais;

    /**
     * @var \PaymentAssist\Type\CTSummarynotices
     */
    private $notices;

    /**
     * @var \PaymentAssist\Type\CTSummarylinks
     */
    private $links;

    /**
     * @var \PaymentAssist\Type\CTSummarycifas
     */
    private $cifas;

    /**
     * @var \PaymentAssist\Type\CTSummaryrtr
     */
    private $rtr;

    /**
     * @var \PaymentAssist\Type\CTSummaryshare
     */
    private $share;

    /**
     * @var \PaymentAssist\Type\CTSummarybds
     */
    private $bds;

    /**
     * @var \PaymentAssist\Type\CTSummaryich
     */
    private $ich;

    /**
     * @var \PaymentAssist\Type\CTSummaryindebt
     */
    private $indebt;

    /**
     * @var \PaymentAssist\Type\CTSummarytpd
     */
    private $tpd;

    /**
     * @var \PaymentAssist\Type\CTSummaryaddress
     */
    private $summaryaddress;

    /**
     * @var \PaymentAssist\Type\CTSummaryresidency
     */
    private $address;

    /**
     * @return \PaymentAssist\Type\CTSummarysearches
     */
    public function getSearches()
    {
        return $this->searches;
    }

    /**
     * @param \PaymentAssist\Type\CTSummarysearches $searches
     * @return CTOutputsummaryblock
     */
    public function withSearches($searches)
    {
        $new = clone $this;
        $new->searches = $searches;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummaryjudgment
     */
    public function getJudgments()
    {
        return $this->judgments;
    }

    /**
     * @param \PaymentAssist\Type\CTSummaryjudgment $judgments
     * @return CTOutputsummaryblock
     */
    public function withJudgments($judgments)
    {
        $new = clone $this;
        $new->judgments = $judgments;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummarybai
     */
    public function getBais()
    {
        return $this->bais;
    }

    /**
     * @param \PaymentAssist\Type\CTSummarybai $bais
     * @return CTOutputsummaryblock
     */
    public function withBais($bais)
    {
        $new = clone $this;
        $new->bais = $bais;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummarynotices
     */
    public function getNotices()
    {
        return $this->notices;
    }

    /**
     * @param \PaymentAssist\Type\CTSummarynotices $notices
     * @return CTOutputsummaryblock
     */
    public function withNotices($notices)
    {
        $new = clone $this;
        $new->notices = $notices;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummarylinks
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param \PaymentAssist\Type\CTSummarylinks $links
     * @return CTOutputsummaryblock
     */
    public function withLinks($links)
    {
        $new = clone $this;
        $new->links = $links;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummarycifas
     */
    public function getCifas()
    {
        return $this->cifas;
    }

    /**
     * @param \PaymentAssist\Type\CTSummarycifas $cifas
     * @return CTOutputsummaryblock
     */
    public function withCifas($cifas)
    {
        $new = clone $this;
        $new->cifas = $cifas;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummaryrtr
     */
    public function getRtr()
    {
        return $this->rtr;
    }

    /**
     * @param \PaymentAssist\Type\CTSummaryrtr $rtr
     * @return CTOutputsummaryblock
     */
    public function withRtr($rtr)
    {
        $new = clone $this;
        $new->rtr = $rtr;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummaryshare
     */
    public function getShare()
    {
        return $this->share;
    }

    /**
     * @param \PaymentAssist\Type\CTSummaryshare $share
     * @return CTOutputsummaryblock
     */
    public function withShare($share)
    {
        $new = clone $this;
        $new->share = $share;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummarybds
     */
    public function getBds()
    {
        return $this->bds;
    }

    /**
     * @param \PaymentAssist\Type\CTSummarybds $bds
     * @return CTOutputsummaryblock
     */
    public function withBds($bds)
    {
        $new = clone $this;
        $new->bds = $bds;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummaryich
     */
    public function getIch()
    {
        return $this->ich;
    }

    /**
     * @param \PaymentAssist\Type\CTSummaryich $ich
     * @return CTOutputsummaryblock
     */
    public function withIch($ich)
    {
        $new = clone $this;
        $new->ich = $ich;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummaryindebt
     */
    public function getIndebt()
    {
        return $this->indebt;
    }

    /**
     * @param \PaymentAssist\Type\CTSummaryindebt $indebt
     * @return CTOutputsummaryblock
     */
    public function withIndebt($indebt)
    {
        $new = clone $this;
        $new->indebt = $indebt;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummarytpd
     */
    public function getTpd()
    {
        return $this->tpd;
    }

    /**
     * @param \PaymentAssist\Type\CTSummarytpd $tpd
     * @return CTOutputsummaryblock
     */
    public function withTpd($tpd)
    {
        $new = clone $this;
        $new->tpd = $tpd;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummaryaddress
     */
    public function getSummaryaddress()
    {
        return $this->summaryaddress;
    }

    /**
     * @param \PaymentAssist\Type\CTSummaryaddress $summaryaddress
     * @return CTOutputsummaryblock
     */
    public function withSummaryaddress($summaryaddress)
    {
        $new = clone $this;
        $new->summaryaddress = $summaryaddress;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSummaryresidency
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param \PaymentAssist\Type\CTSummaryresidency $address
     * @return CTOutputsummaryblock
     */
    public function withAddress($address)
    {
        $new = clone $this;
        $new->address = $address;

        return $new;
    }


}

