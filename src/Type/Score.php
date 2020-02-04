<?php

namespace PaymentAssist\Type;

class Score
{

    /**
     * @var int
     */
    private $_;

    /**
     * @var int
     */
    private $class;

    /**
     * @return int
     */
    public function get_()
    {
        return $this->_;
    }

    /**
     * @param int $_
     * @return Score
     */
    public function with_($_)
    {
        $new = clone $this;
        $new->_ = $_;

        return $new;
    }

    /**
     * @return int
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param int $class
     * @return Score
     */
    public function withClass($class)
    {
        $new = clone $this;
        $new->class = $class;

        return $new;
    }


}

