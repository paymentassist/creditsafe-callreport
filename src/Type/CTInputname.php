<?php

namespace PaymentAssist\Type;

class CTInputname
{
    /**
     * Title
     *
     * @var null | string
     */
    private ?string $title = null;

    /**
     * Forename
     *
     * @var null | string
     */
    private ?string $forename = null;

    /**
     * Middle names / initials
     *
     * @var null | string
     */
    private ?string $othernames = null;

    /**
     * Surname
     *
     * @var string
     */
    private string $surname;

    /**
     * Suffix
     *
     * @var null | string
     */
    private ?string $suffix = null;

    /**
     * @return null | string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }

    /**
     * @param null | string $title
     * @return static
     */
    public function withTitle(?string $title) : static
    {
        $new = clone $this;
        $new->title = $title;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getForename() : ?string
    {
        return $this->forename;
    }

    /**
     * @param null | string $forename
     * @return static
     */
    public function withForename(?string $forename) : static
    {
        $new = clone $this;
        $new->forename = $forename;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getOthernames() : ?string
    {
        return $this->othernames;
    }

    /**
     * @param null | string $othernames
     * @return static
     */
    public function withOthernames(?string $othernames) : static
    {
        $new = clone $this;
        $new->othernames = $othernames;

        return $new;
    }

    /**
     * @return string
     */
    public function getSurname() : string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return static
     */
    public function withSurname(string $surname) : static
    {
        $new = clone $this;
        $new->surname = $surname;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSuffix() : ?string
    {
        return $this->suffix;
    }

    /**
     * @param null | string $suffix
     * @return static
     */
    public function withSuffix(?string $suffix) : static
    {
        $new = clone $this;
        $new->suffix = $suffix;

        return $new;
    }
}

