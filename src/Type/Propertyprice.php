<?php

namespace PaymentAssist\Type;

class Propertyprice
{
    /**
     * Index of detached price against national average
     *
     * @var null | int
     */
    private ?int $d_index = null;

    /**
     * Index of detached price against regional average
     *
     * @var null | int
     */
    private ?int $d_r_index = null;

    /**
     * Index of semi-detached price against national average
     *
     * @var null | int
     */
    private ?int $s_index = null;

    /**
     * Index of semi-detached price against regional average
     *
     * @var null | int
     */
    private ?int $s_r_index = null;

    /**
     * Index of terrace price against national average
     *
     * @var null | int
     */
    private ?int $t_index = null;

    /**
     * Index of terrace price against regional average
     *
     * @var null | int
     */
    private ?int $t_r_index = null;

    /**
     * Index of flat price against national average
     *
     * @var null | int
     */
    private ?int $f_index = null;

    /**
     * Index of flat price against regional average
     *
     * @var null | int
     */
    private ?int $f_r_index = null;

    /**
     * @return null | int
     */
    public function getDIndex() : ?int
    {
        return $this->d_index;
    }

    /**
     * @param null | int $d_index
     * @return static
     */
    public function withDIndex(?int $d_index) : static
    {
        $new = clone $this;
        $new->d_index = $d_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getDRIndex() : ?int
    {
        return $this->d_r_index;
    }

    /**
     * @param null | int $d_r_index
     * @return static
     */
    public function withDRIndex(?int $d_r_index) : static
    {
        $new = clone $this;
        $new->d_r_index = $d_r_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getSIndex() : ?int
    {
        return $this->s_index;
    }

    /**
     * @param null | int $s_index
     * @return static
     */
    public function withSIndex(?int $s_index) : static
    {
        $new = clone $this;
        $new->s_index = $s_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getSRIndex() : ?int
    {
        return $this->s_r_index;
    }

    /**
     * @param null | int $s_r_index
     * @return static
     */
    public function withSRIndex(?int $s_r_index) : static
    {
        $new = clone $this;
        $new->s_r_index = $s_r_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTIndex() : ?int
    {
        return $this->t_index;
    }

    /**
     * @param null | int $t_index
     * @return static
     */
    public function withTIndex(?int $t_index) : static
    {
        $new = clone $this;
        $new->t_index = $t_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getTRIndex() : ?int
    {
        return $this->t_r_index;
    }

    /**
     * @param null | int $t_r_index
     * @return static
     */
    public function withTRIndex(?int $t_r_index) : static
    {
        $new = clone $this;
        $new->t_r_index = $t_r_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getFIndex() : ?int
    {
        return $this->f_index;
    }

    /**
     * @param null | int $f_index
     * @return static
     */
    public function withFIndex(?int $f_index) : static
    {
        $new = clone $this;
        $new->f_index = $f_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getFRIndex() : ?int
    {
        return $this->f_r_index;
    }

    /**
     * @param null | int $f_r_index
     * @return static
     */
    public function withFRIndex(?int $f_r_index) : static
    {
        $new = clone $this;
        $new->f_r_index = $f_r_index;

        return $new;
    }
}

