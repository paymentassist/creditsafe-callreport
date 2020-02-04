<?php

namespace PaymentAssist\Type;

class Propertyprice
{

    /**
     * @var int
     */
    private $d_index;

    /**
     * @var int
     */
    private $d_r_index;

    /**
     * @var int
     */
    private $s_index;

    /**
     * @var int
     */
    private $s_r_index;

    /**
     * @var int
     */
    private $t_index;

    /**
     * @var int
     */
    private $t_r_index;

    /**
     * @var int
     */
    private $f_index;

    /**
     * @var int
     */
    private $f_r_index;

    /**
     * @return int
     */
    public function getD_index()
    {
        return $this->d_index;
    }

    /**
     * @param int $d_index
     * @return Propertyprice
     */
    public function withD_index($d_index)
    {
        $new = clone $this;
        $new->d_index = $d_index;

        return $new;
    }

    /**
     * @return int
     */
    public function getD_r_index()
    {
        return $this->d_r_index;
    }

    /**
     * @param int $d_r_index
     * @return Propertyprice
     */
    public function withD_r_index($d_r_index)
    {
        $new = clone $this;
        $new->d_r_index = $d_r_index;

        return $new;
    }

    /**
     * @return int
     */
    public function getS_index()
    {
        return $this->s_index;
    }

    /**
     * @param int $s_index
     * @return Propertyprice
     */
    public function withS_index($s_index)
    {
        $new = clone $this;
        $new->s_index = $s_index;

        return $new;
    }

    /**
     * @return int
     */
    public function getS_r_index()
    {
        return $this->s_r_index;
    }

    /**
     * @param int $s_r_index
     * @return Propertyprice
     */
    public function withS_r_index($s_r_index)
    {
        $new = clone $this;
        $new->s_r_index = $s_r_index;

        return $new;
    }

    /**
     * @return int
     */
    public function getT_index()
    {
        return $this->t_index;
    }

    /**
     * @param int $t_index
     * @return Propertyprice
     */
    public function withT_index($t_index)
    {
        $new = clone $this;
        $new->t_index = $t_index;

        return $new;
    }

    /**
     * @return int
     */
    public function getT_r_index()
    {
        return $this->t_r_index;
    }

    /**
     * @param int $t_r_index
     * @return Propertyprice
     */
    public function withT_r_index($t_r_index)
    {
        $new = clone $this;
        $new->t_r_index = $t_r_index;

        return $new;
    }

    /**
     * @return int
     */
    public function getF_index()
    {
        return $this->f_index;
    }

    /**
     * @param int $f_index
     * @return Propertyprice
     */
    public function withF_index($f_index)
    {
        $new = clone $this;
        $new->f_index = $f_index;

        return $new;
    }

    /**
     * @return int
     */
    public function getF_r_index()
    {
        return $this->f_r_index;
    }

    /**
     * @param int $f_r_index
     * @return Propertyprice
     */
    public function withF_r_index($f_r_index)
    {
        $new = clone $this;
        $new->f_r_index = $f_r_index;

        return $new;
    }


}

