<?php

namespace PaymentAssist\Type;

class CTApipicklist
{

    /**
     * @var \PaymentAssist\Type\CTPicklistapplicant
     */
    private $applicant;

    /**
     * @var int
     */
    private $maxaddressitems;

    /**
     * @var int
     */
    private $maxnameitems;

    /**
     * @var int
     */
    private $picklist;

    /**
     * @var int
     */
    private $regenerated;

    /**
     * @return \PaymentAssist\Type\CTPicklistapplicant
     */
    public function getApplicant()
    {
        return $this->applicant;
    }

    /**
     * @param \PaymentAssist\Type\CTPicklistapplicant $applicant
     * @return CTApipicklist
     */
    public function withApplicant($applicant)
    {
        $new = clone $this;
        $new->applicant = $applicant;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxaddressitems()
    {
        return $this->maxaddressitems;
    }

    /**
     * @param int $maxaddressitems
     * @return CTApipicklist
     */
    public function withMaxaddressitems($maxaddressitems)
    {
        $new = clone $this;
        $new->maxaddressitems = $maxaddressitems;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxnameitems()
    {
        return $this->maxnameitems;
    }

    /**
     * @param int $maxnameitems
     * @return CTApipicklist
     */
    public function withMaxnameitems($maxnameitems)
    {
        $new = clone $this;
        $new->maxnameitems = $maxnameitems;

        return $new;
    }

    /**
     * @return int
     */
    public function getPicklist()
    {
        return $this->picklist;
    }

    /**
     * @param int $picklist
     * @return CTApipicklist
     */
    public function withPicklist($picklist)
    {
        $new = clone $this;
        $new->picklist = $picklist;

        return $new;
    }

    /**
     * @return int
     */
    public function getRegenerated()
    {
        return $this->regenerated;
    }

    /**
     * @param int $regenerated
     * @return CTApipicklist
     */
    public function withRegenerated($regenerated)
    {
        $new = clone $this;
        $new->regenerated = $regenerated;

        return $new;
    }


}

