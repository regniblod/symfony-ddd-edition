<?php
namespace Acme\Foo\Tests\Domain\Model;

use Acme\Foo\Domain\Model\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testUser()
    {
        $firstName = 'Ragnar';
        $lastName = 'Regniblod';

        $user = new User($firstName, $lastName);

        $this->assertEquals($firstName, $user->getFirstName());
        $this->assertEquals($lastName, $user->getLastName());
    }
}
