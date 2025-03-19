<?php

namespace PaymentAssist\Type;

class Subjects
{
    /**
     * Each CIFAS Case may have one or more subjects
     *
     * @var non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputcifassubject>
     */
    private array $subject;

    /**
     * @return non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputcifassubject>
     */
    public function getSubject() : array
    {
        return $this->subject;
    }

    /**
     * @param non-empty-array<int<0,max>, \PaymentAssist\Type\CTOutputcifassubject> $subject
     * @return static
     */
    public function withSubject(array $subject) : static
    {
        $new = clone $this;
        $new->subject = $subject;

        return $new;
    }
}

