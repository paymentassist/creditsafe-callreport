<?php

namespace PaymentAssist\Type;

class Economicactivity
{

    /**
     * @var int
     */
    private $wkfem_ind;

    /**
     * @var int
     */
    private $stu_ind;

    /**
     * @var int
     */
    private $sick_ind;

    /**
     * @var int
     */
    private $degree_ind;

    /**
     * @return int
     */
    public function getWkfem_ind()
    {
        return $this->wkfem_ind;
    }

    /**
     * @param int $wkfem_ind
     * @return Economicactivity
     */
    public function withWkfem_ind($wkfem_ind)
    {
        $new = clone $this;
        $new->wkfem_ind = $wkfem_ind;

        return $new;
    }

    /**
     * @return int
     */
    public function getStu_ind()
    {
        return $this->stu_ind;
    }

    /**
     * @param int $stu_ind
     * @return Economicactivity
     */
    public function withStu_ind($stu_ind)
    {
        $new = clone $this;
        $new->stu_ind = $stu_ind;

        return $new;
    }

    /**
     * @return int
     */
    public function getSick_ind()
    {
        return $this->sick_ind;
    }

    /**
     * @param int $sick_ind
     * @return Economicactivity
     */
    public function withSick_ind($sick_ind)
    {
        $new = clone $this;
        $new->sick_ind = $sick_ind;

        return $new;
    }

    /**
     * @return int
     */
    public function getDegree_ind()
    {
        return $this->degree_ind;
    }

    /**
     * @param int $degree_ind
     * @return Economicactivity
     */
    public function withDegree_ind($degree_ind)
    {
        $new = clone $this;
        $new->degree_ind = $degree_ind;

        return $new;
    }


}

