<?php

namespace PaymentAssist\Type;

class CTSearchResult
{

    /**
     * @var \PaymentAssist\Type\CTJobdetails
     */
    private $jobdetails;

    /**
     * @var \PaymentAssist\Type\CTPayload
     */
    private $payload;

    /**
     * @var string
     */
    private $yourreference;

    /**
     * @var \PaymentAssist\Type\CTLinkrequest
     */
    private $linkrequest;

    /**
     * @var \PaymentAssist\Type\CTAmendsubsequent
     */
    private $secondaryrequest;

    /**
     * @var \PaymentAssist\Type\CTSearchrequest
     */
    private $creditrequest;

    /**
     * @var \PaymentAssist\Type\CTApipicklist
     */
    private $picklist;

    /**
     * @var string
     */
    private $token;

    /**
     * @var \PaymentAssist\Type\CTCreditreport
     */
    private $creditreport;

    /**
     * @return \PaymentAssist\Type\CTJobdetails
     */
    public function getJobdetails()
    {
        return $this->jobdetails;
    }

    /**
     * @param \PaymentAssist\Type\CTJobdetails $jobdetails
     * @return CTSearchResult
     */
    public function withJobdetails($jobdetails)
    {
        $new = clone $this;
        $new->jobdetails = $jobdetails;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTPayload
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param \PaymentAssist\Type\CTPayload $payload
     * @return CTSearchResult
     */
    public function withPayload($payload)
    {
        $new = clone $this;
        $new->payload = $payload;

        return $new;
    }

    /**
     * @return string
     */
    public function getYourreference()
    {
        return $this->yourreference;
    }

    /**
     * @param string $yourreference
     * @return CTSearchResult
     */
    public function withYourreference($yourreference)
    {
        $new = clone $this;
        $new->yourreference = $yourreference;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTLinkrequest
     */
    public function getLinkrequest()
    {
        return $this->linkrequest;
    }

    /**
     * @param \PaymentAssist\Type\CTLinkrequest $linkrequest
     * @return CTSearchResult
     */
    public function withLinkrequest($linkrequest)
    {
        $new = clone $this;
        $new->linkrequest = $linkrequest;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTAmendsubsequent
     */
    public function getSecondaryrequest()
    {
        return $this->secondaryrequest;
    }

    /**
     * @param \PaymentAssist\Type\CTAmendsubsequent $secondaryrequest
     * @return CTSearchResult
     */
    public function withSecondaryrequest($secondaryrequest)
    {
        $new = clone $this;
        $new->secondaryrequest = $secondaryrequest;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTSearchrequest
     */
    public function getCreditrequest()
    {
        return $this->creditrequest;
    }

    /**
     * @param \PaymentAssist\Type\CTSearchrequest $creditrequest
     * @return CTSearchResult
     */
    public function withCreditrequest($creditrequest)
    {
        $new = clone $this;
        $new->creditrequest = $creditrequest;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTApipicklist
     */
    public function getPicklist()
    {
        return $this->picklist;
    }

    /**
     * @param \PaymentAssist\Type\CTApipicklist $picklist
     * @return CTSearchResult
     */
    public function withPicklist($picklist)
    {
        $new = clone $this;
        $new->picklist = $picklist;

        return $new;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return CTSearchResult
     */
    public function withToken($token)
    {
        $new = clone $this;
        $new->token = $token;

        return $new;
    }

    /**
     * @return \PaymentAssist\Type\CTCreditreport
     */
    public function getCreditreport()
    {
        return $this->creditreport;
    }

    /**
     * @param \PaymentAssist\Type\CTCreditreport $creditreport
     * @return CTSearchResult
     */
    public function withCreditreport($creditreport)
    {
        $new = clone $this;
        $new->creditreport = $creditreport;

        return $new;
    }


}

