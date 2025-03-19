<?php

namespace PaymentAssist\Type;

class Score
{
    /**
     * @var int
     */
    private int $_;

    /**
     * Class of scorecard
     * The list of possible values can be obtained from the web method LookupData07a table id = scorecardclass
     *
     * @var int
     */
    private int $class;

    /**
     * @return int
     */
    public function get_() : int
    {
        return $this->_;
    }

    /**
     * @param int $_
     * @return static
     */
    public function with_(int $_) : static
    {
        $new = clone $this;
        $new->_ = $_;

        return $new;
    }

    /**
     * @return int
     */
    public function getClass() : int
    {
        return $this->class;
    }

    /**
     * @param int $class
     * @return static
     */
    public function withClass(int $class) : static
    {
        $new = clone $this;
        $new->class = $class;

        return $new;
    }
}

