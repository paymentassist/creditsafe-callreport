<?php

namespace PaymentAssist\Type;

class Table
{

    /**
     * @var \PaymentAssist\Type\Row
     */
    private $row;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $desc;

    /**
     * @return \PaymentAssist\Type\Row
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * @param \PaymentAssist\Type\Row $row
     * @return Table
     */
    public function withRow($row)
    {
        $new = clone $this;
        $new->row = $row;

        return $new;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return Table
     */
    public function withId($id)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     * @return Table
     */
    public function withDesc($desc)
    {
        $new = clone $this;
        $new->desc = $desc;

        return $new;
    }


}

