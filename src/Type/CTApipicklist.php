<?php

namespace PaymentAssist\Type;

class CTApipicklist
{
    /**
     * Input and matched name and address details for an applicant (primary or secondary)
     *
     * @var non-empty-array<int<0,1>, \PaymentAssist\Type\CTPicklistapplicant>
     */
    private array $applicant;

    /**
     * Maximum number of address items in picklist
     *
     * @var int
     */
    private int $maxaddressitems;

    /**
     * Maximum number of name items in picklist (for each address)
     *
     * @var int
     */
    private int $maxnameitems;

    /**
     * A value of 1 indicates that picklists are switched on
     *
     * @var int
     */
    private int $picklist;

    /**
     * If this attribute is present and has a value of 1 then the picklist has been re-generated and any selection must be redone.
     *
     * @var null | int
     */
    private ?int $regenerated = null;

    /**
     * @return non-empty-array<int<0,1>, \PaymentAssist\Type\CTPicklistapplicant>
     */
    public function getApplicant() : array
    {
        return $this->applicant;
    }

    /**
     * @param non-empty-array<int<0,1>, \PaymentAssist\Type\CTPicklistapplicant> $applicant
     * @return static
     */
    public function withApplicant(array $applicant) : static
    {
        $new = clone $this;
        $new->applicant = $applicant;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxaddressitems() : int
    {
        return $this->maxaddressitems;
    }

    /**
     * @param int $maxaddressitems
     * @return static
     */
    public function withMaxaddressitems(int $maxaddressitems) : static
    {
        $new = clone $this;
        $new->maxaddressitems = $maxaddressitems;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxnameitems() : int
    {
        return $this->maxnameitems;
    }

    /**
     * @param int $maxnameitems
     * @return static
     */
    public function withMaxnameitems(int $maxnameitems) : static
    {
        $new = clone $this;
        $new->maxnameitems = $maxnameitems;

        return $new;
    }

    /**
     * @return int
     */
    public function getPicklist() : int
    {
        return $this->picklist;
    }

    /**
     * @param int $picklist
     * @return static
     */
    public function withPicklist(int $picklist) : static
    {
        $new = clone $this;
        $new->picklist = $picklist;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getRegenerated() : ?int
    {
        return $this->regenerated;
    }

    /**
     * @param null | int $regenerated
     * @return static
     */
    public function withRegenerated(?int $regenerated) : static
    {
        $new = clone $this;
        $new->regenerated = $regenerated;

        return $new;
    }
}

