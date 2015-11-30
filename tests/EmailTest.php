<?php

namespace JonasDeKeukelaere\Email\tests;

use JonasDeKeukelaere\Email\Email;

class EmailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \PHPUnit_Framework_Error
     */
    public function testShouldHaveEmail()
    {
        $email = new Email();
    }

    /**
     * @expectedException \Assert\AssertionFailedException
     */
    public function testCannotHaveInvalidEmail()
    {
        $email = new Email('hello world');
    }

    public function testCanHaveValidEmail()
    {
        $email = new Email('dummy@example.com');

        $this->assertInstanceOf('\JonasDeKeukelaere\Email\Email', $email);
    }

    public function testCastAsString()
    {
        $email = new Email('dummy@example.com');

        $this->assertEquals('dummy@example.com', (string) $email);
    }
}
