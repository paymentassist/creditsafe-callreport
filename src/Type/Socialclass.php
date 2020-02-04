<?php

namespace PaymentAssist\Type;

class Socialclass
{

    /**
     * @var int
     */
    private $ab_ind;

    /**
     * @var int
     */
    private $c1_ind;

    /**
     * @var int
     */
    private $c2_ind;

    /**
     * @var int
     */
    private $de_ind;

    /**
     * @return int
     */
    public function getAb_ind()
    {
        return $this->ab_ind;
    }

    /**
     * @param int $ab_ind
     * @return Socialclass
     */
    public function withAb_ind($ab_ind)
    {
        $new = clone $this;
        $new->ab_ind = $ab_ind;

        return $new;
    }

    /**
     * @return int
     */
    public function getC1_ind()
    {
        return $this->c1_ind;
    }

    /**
     * @param int $c1_ind
     * @return Socialclass
     */
    public function withC1_ind($c1_ind)
    {
        $new = clone $this;
        $new->c1_ind = $c1_ind;

        return $new;
    }

    /**
     * @return int
     */
    public function getC2_ind()
    {
        return $this->c2_ind;
    }

    /**
     * @param int $c2_ind
     * @return Socialclass
     */
    public function withC2_ind($c2_ind)
    {
        $new = clone $this;
        $new->c2_ind = $c2_ind;

        return $new;
    }

    /**
     * @return int
     */
    public function getDe_ind()
    {
        return $this->de_ind;
    }

    /**
     * @param int $de_ind
     * @return Socialclass
     */
    public function withDe_ind($de_ind)
    {
        $new = clone $this;
        $new->de_ind = $de_ind;

        return $new;
    }


}

