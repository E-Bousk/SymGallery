<?php

namespace App\Tests;

use App\Entity\Categorie;
use App\Entity\Peinture;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class PeintureUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $peinture  = new Peinture();
        $datetime  = new DateTime();
        $categorie = new Categorie();
        $user      = new User();

        $peinture->setNom('Nom')
                 ->setLargeur(20.20)
                 ->setHauteur(20.20)
                 ->setEnVente(true)
                 ->setDateRealisation($datetime)
                 ->setCreatedAt($datetime)
                 ->setDescription('Description')
                 ->setPortfolio(true)
                 ->setSlug('slug')
                 ->setFile('file')
                 ->setPrix(20.20)
                 ->setUser($user)
                 ->addCategorie($categorie)
        ;

        $this->assertTrue($peinture->getNom() === 'Nom');
        $this->assertTrue($peinture->getLargeur() == 20.20);
        $this->assertTrue($peinture->getHauteur() == 20.20);
        $this->assertTrue($peinture->getEnVente() === true);
        $this->assertTrue($peinture->getDateRealisation() === $datetime);
        $this->assertTrue($peinture->getCreatedAt() === $datetime);
        $this->assertTrue($peinture->getDescription() === 'Description');
        $this->assertTrue($peinture->getPortfolio() === true);
        $this->assertTrue($peinture->getSlug() === 'slug');
        $this->assertTrue($peinture->getFile() === 'file');
        $this->assertTrue($peinture->getPrix() == 20.20);
        $this->assertTrue($peinture->getUser() === $user);
        $this->assertContains($categorie, $peinture->getCategorie());
    }

    public function testIsFalse(): void
    {
        $peinture = new Peinture();
        $datetime  = new DateTime();
        $categorie = new Categorie();
        $user      = new User();

        $peinture->setNom('Nom')
                 ->setLargeur(20.20)
                 ->setHauteur(20.20)
                 ->setEnVente(true)
                 ->setDateRealisation($datetime)
                 ->setCreatedAt($datetime)
                 ->setDescription('Description')
                 ->setPortfolio(true)
                 ->setSlug('slug')
                 ->setFile('file')
                 ->setPrix(20.20)
                 ->setUser($user)
                 ->addCategorie($categorie)
        ;

        $this->assertFalse($peinture->getNom() === 'false');
        $this->assertFalse($peinture->getLargeur() == 0);
        $this->assertFalse($peinture->getHauteur() == 0);
        $this->assertFalse($peinture->getEnVente() === false);
        $this->assertFalse($peinture->getDateRealisation() === new DateTime());
        $this->assertFalse($peinture->getCreatedAt() === new DateTime());
        $this->assertFalse($peinture->getDescription() === 'false');
        $this->assertFalse($peinture->getPortfolio() === false);
        $this->assertFalse($peinture->getSlug() === 'false');
        $this->assertFalse($peinture->getFile() === 'false');
        $this->assertFalse($peinture->getPrix() == 0);
        $this->assertFalse($peinture->getUser() === new User());
        $this->assertNotContains(new Categorie(), $peinture->getCategorie());
    }

    public function testIsEmpty(): void
    {
        $peinture = new Peinture();

        $this->assertEmpty($peinture->getNom());
        $this->assertEmpty($peinture->getLargeur());
        $this->assertEmpty($peinture->getHauteur());
        $this->assertEmpty($peinture->getEnVente());
        $this->assertEmpty($peinture->getDateRealisation());
        $this->assertEmpty($peinture->getCreatedAt());
        $this->assertEmpty($peinture->getDescription());
        $this->assertEmpty($peinture->getPortfolio());
        $this->assertEmpty($peinture->getSlug());
        $this->assertEmpty($peinture->getFile());
        $this->assertEmpty($peinture->getPrix());
        $this->assertEmpty($peinture->getUser());
        $this->assertEmpty($peinture->getCategorie());
    }
}
