<?php

namespace PaymentAssist\Type;

class Economicactivity
{
    /**
     * Working females indices
     *
     * @var null | int
     */
    private ?int $wkfem_ind = null;

    /**
     * Students indices
     *
     * @var null | int
     */
    private ?int $stu_ind = null;

    /**
     * Residents with long-term illness indices
     *
     * @var null | int
     */
    private ?int $sick_ind = null;

    /**
     * Residents with degrees indices
     *
     * @var null | int
     */
    private ?int $degree_ind = null;

    /**
     * @return null | int
     */
    public function getWkfemInd() : ?int
    {
        return $this->wkfem_ind;
    }

    /**
     * @param null | int $wkfem_ind
     * @return static
     */
    public function withWkfemInd(?int $wkfem_ind) : static
    {
        $new = clone $this;
        $new->wkfem_ind = $wkfem_ind;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getStuInd() : ?int
    {
        return $this->stu_ind;
    }

    /**
     * @param null | int $stu_ind
     * @return static
     */
    public function withStuInd(?int $stu_ind) : static
    {
        $new = clone $this;
        $new->stu_ind = $stu_ind;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getSickInd() : ?int
    {
        return $this->sick_ind;
    }

    /**
     * @param null | int $sick_ind
     * @return static
     */
    public function withSickInd(?int $sick_ind) : static
    {
        $new = clone $this;
        $new->sick_ind = $sick_ind;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getDegreeInd() : ?int
    {
        return $this->degree_ind;
    }

    /**
     * @param null | int $degree_ind
     * @return static
     */
    public function withDegreeInd(?int $degree_ind) : static
    {
        $new = clone $this;
        $new->degree_ind = $degree_ind;

        return $new;
    }
}

