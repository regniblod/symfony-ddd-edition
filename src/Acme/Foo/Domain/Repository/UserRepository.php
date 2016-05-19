<?php

namespace Acme\Foo\Domain\Repository;

use Acme\Foo\Domain\Model\User;

interface UserRepository
{
    /**
     * @param int $id
     * @return User
     */
    public function findOne($id): User;
}
