<?php

namespace Acme\Foo\Infrastructure\Repository\Doctrine;

use Acme\Foo\Domain\Model\User;
use Acme\Foo\Domain\Repository\UserRepository as UserRepositoryInterface;
use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository implements UserRepositoryInterface
{
    /**
     * @param int $id
     * @return User
     */
    public function findOne($id): User
    {
        return parent::findOne($id);
    }
}
