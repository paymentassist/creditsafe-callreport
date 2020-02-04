<?php

namespace PaymentAssist\Type;

class CTInputname
{

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $forename;

    /**
     * @var string
     */
    private $othernames;

    /**
     * @var string
     */
    private $surname;

    /**
     * @var string
     */
    private $suffix;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return CTInputname
     */
    public function withTitle($title)
    {
        $new = clone $this;
        $new->title = $title;

        return $new;
    }

    /**
     * @return string
     */
    public function getForename()
    {
        return $this->forename;
    }

    /**
     * @param string $forename
     * @return CTInputname
     */
    public function withForename($forename)
    {
        $new = clone $this;
        $new->forename = $forename;

        return $new;
    }

    /**
     * @return string
     */
    public function getOthernames()
    {
        return $this->othernames;
    }

    /**
     * @param string $othernames
     * @return CTInputname
     */
    public function withOthernames($othernames)
    {
        $new = clone $this;
        $new->othernames = $othernames;

        return $new;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return CTInputname
     */
    public function withSurname($surname)
    {
        $new = clone $this;
        $new->surname = $surname;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuffix()
    {
        return $this->suffix;
    }

    /**
     * @param string $suffix
     * @return CTInputname
     */
    public function withSuffix($suffix)
    {
        $new = clone $this;
        $new->suffix = $suffix;

        return $new;
    }


}

