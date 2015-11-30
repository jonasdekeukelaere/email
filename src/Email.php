<?php

namespace JonasDeKeukelaere\Email;

use Assert\Assertion;

class Email
{
    /**
     * @var string
     */
    private $email;

    /**
     * @param string $email
     */
    public function __construct($email)
    {
        Assertion::email($email);

        $this->email = $email;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->email;
    }
}
