<?php

namespace PaymentAssist\Type;

class CTOutputdemographicsPropertyprice
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
    public function getD_index(): ?int
    {
        return $this->d_index;
    }

    /**
     * @param null | int $d_index
     * @return static
     */
    public function withD_index(?int $d_index): static
    {
        $new = clone $this;
        $new->d_index = $d_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getD_r_index(): ?int
    {
        return $this->d_r_index;
    }

    /**
     * @param null | int $d_r_index
     * @return static
     */
    public function withD_r_index(?int $d_r_index): static
    {
        $new = clone $this;
        $new->d_r_index = $d_r_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getS_index(): ?int
    {
        return $this->s_index;
    }

    /**
     * @param null | int $s_index
     * @return static
     */
    public function withS_index(?int $s_index): static
    {
        $new = clone $this;
        $new->s_index = $s_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getS_r_index(): ?int
    {
        return $this->s_r_index;
    }

    /**
     * @param null | int $s_r_index
     * @return static
     */
    public function withS_r_index(?int $s_r_index): static
    {
        $new = clone $this;
        $new->s_r_index = $s_r_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getT_index(): ?int
    {
        return $this->t_index;
    }

    /**
     * @param null | int $t_index
     * @return static
     */
    public function withT_index(?int $t_index): static
    {
        $new = clone $this;
        $new->t_index = $t_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getT_r_index(): ?int
    {
        return $this->t_r_index;
    }

    /**
     * @param null | int $t_r_index
     * @return static
     */
    public function withT_r_index(?int $t_r_index): static
    {
        $new = clone $this;
        $new->t_r_index = $t_r_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getF_index(): ?int
    {
        return $this->f_index;
    }

    /**
     * @param null | int $f_index
     * @return static
     */
    public function withF_index(?int $f_index): static
    {
        $new = clone $this;
        $new->f_index = $f_index;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getF_r_index(): ?int
    {
        return $this->f_r_index;
    }

    /**
     * @param null | int $f_r_index
     * @return static
     */
    public function withF_r_index(?int $f_r_index): static
    {
        $new = clone $this;
        $new->f_r_index = $f_r_index;

        return $new;
    }
}

