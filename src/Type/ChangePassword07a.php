<?php

namespace PaymentAssist\Type;

class ChangePassword07a
{

    /**
     * @var string
     */
    private $newpwd;

    /**
     * @var string
     */
    private $confirmpwd;

    /**
     * @return string
     */
    public function getNewpwd()
    {
        return $this->newpwd;
    }

    /**
     * @param string $newpwd
     * @return ChangePassword07a
     */
    public function withNewpwd($newpwd)
    {
        $new = clone $this;
        $new->newpwd = $newpwd;

        return $new;
    }

    /**
     * @return string
     */
    public function getConfirmpwd()
    {
        return $this->confirmpwd;
    }

    /**
     * @param string $confirmpwd
     * @return ChangePassword07a
     */
    public function withConfirmpwd($confirmpwd)
    {
        $new = clone $this;
        $new->confirmpwd = $confirmpwd;

        return $new;
    }


}

