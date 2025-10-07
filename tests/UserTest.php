<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserSettersAndGetters(): void
    {
        $user = new User();
        $user->setUsername('testuser');
        $user->setPassword('password');
        $user->setRoles(['ROLE_ADMIN']);

        $this->assertSame('testuser', $user->getUsername());
        $this->assertSame('password', $user->getPassword());
        $this->assertContains('ROLE_ADMIN', $user->getRoles());
        $this->assertContains('ROLE_USER', $user->getRoles());
    }
}