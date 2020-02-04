<?php

namespace PaymentAssist\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ChangePassword07aResponse implements ResultInterface
{

    /**
     * @var bool
     */
    private $pwdchanged;

    /**
     * @return bool
     */
    public function getPwdchanged()
    {
        return $this->pwdchanged;
    }

    /**
     * @param bool $pwdchanged
     * @return ChangePassword07aResponse
     */
    public function withPwdchanged($pwdchanged)
    {
        $new = clone $this;
        $new->pwdchanged = $pwdchanged;

        return $new;
    }


}

