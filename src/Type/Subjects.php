<?php

namespace PaymentAssist\Type;

class Subjects
{

    /**
     * @var \PaymentAssist\Type\CTOutputcifassubject
     */
    private $subject;

    /**
     * @return \PaymentAssist\Type\CTOutputcifassubject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param \PaymentAssist\Type\CTOutputcifassubject $subject
     * @return Subjects
     */
    public function withSubject($subject)
    {
        $new = clone $this;
        $new->subject = $subject;

        return $new;
    }


}

