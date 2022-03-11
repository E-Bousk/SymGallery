<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();

        $user->setEmail('true@test.com')
             ->setPrenom('Aglaë')
             ->setNom('Sidonie')
             ->setPassword('password')
             ->setAPropos('À propos')
             ->setInstagram('Instagram')
             ->setTelephone('0123456789')
        ;

        $this->assertTrue($user->getEmail() === 'true@test.com');
        $this->assertTrue($user->getPrenom() === 'Aglaë');
        $this->assertTrue($user->getNom() === 'Sidonie');
        $this->assertTrue($user->getPassword() === 'password');
        $this->assertTrue($user->getAPropos() === 'À propos');
        $this->assertTrue($user->getInstagram() === 'Instagram');
        $this->assertTrue($user->getTelephone() === '0123456789');
    }

    public function testIsFalse(): void
    {
        $user = new User();

        $user->setEmail('true@test.com')
             ->setPrenom('Aglaë')
             ->setNom('Sidonie')
             ->setPassword('password')
             ->setAPropos('À propos')
             ->setInstagram('Instagram')
             ->setTelephone('0123456789')
        ;

        $this->assertFalse($user->getEmail() === 'false@test.com');
        $this->assertFalse($user->getPrenom() === 'false');
        $this->assertFalse($user->getNom() === 'false');
        $this->assertFalse($user->getPassword() === 'false');
        $this->assertFalse($user->getAPropos() === 'false');
        $this->assertFalse($user->getId() === 'false');
        $this->assertFalse($user->getTelephone() === '9876543210');

    }

    public function testIsEmpty(): void
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getAPropos());
        $this->assertEmpty($user->getId());
        $this->assertEmpty($user->getTelephone());
    }
}
