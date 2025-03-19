<?php

namespace PaymentAssist\Type;

use \PaymentAssist\Type\CTInputname;

class Namematch extends CTInputname
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
     * Residency identifier
     *
     * @var int
     */
    private int $residenceid;

    /**
     * Data DNA Identifier
     *
     * @var null | int
     */
    private ?int $dnaid = null;

    /**
     * Date of birth
     *
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dob = null;

    /**
     * A value of 1 indicates that this individual match is selected
     *
     * @var null | int
     */
    private ?int $selected = null;

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

    /**
     * @return int
     */
    public function getResidenceid() : int
    {
        return $this->residenceid;
    }

    /**
     * @param int $residenceid
     * @return static
     */
    public function withResidenceid(int $residenceid) : static
    {
        $new = clone $this;
        $new->residenceid = $residenceid;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getDnaid() : ?int
    {
        return $this->dnaid;
    }

    /**
     * @param null | int $dnaid
     * @return static
     */
    public function withDnaid(?int $dnaid) : static
    {
        $new = clone $this;
        $new->dnaid = $dnaid;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getDob() : ?\DateTimeInterface
    {
        return $this->dob;
    }

    /**
     * @param null | \DateTimeInterface $dob
     * @return static
     */
    public function withDob(?\DateTimeInterface $dob) : static
    {
        $new = clone $this;
        $new->dob = $dob;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getSelected() : ?int
    {
        return $this->selected;
    }

    /**
     * @param null | int $selected
     * @return static
     */
    public function withSelected(?int $selected) : static
    {
        $new = clone $this;
        $new->selected = $selected;

        return $new;
    }
}

