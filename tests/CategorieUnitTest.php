<?php

namespace App\Tests;

use App\Entity\Categorie;
use PHPUnit\Framework\TestCase;

class CategorieUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $categorie = new Categorie();

        $categorie->setNom('Nom')
                  ->setDescription('Description')
                  ->setSlug('slug')
        ;

        $this->assertTrue($categorie->getNom() === 'Nom');
        $this->assertTrue($categorie->getDescription() === 'Description');
        $this->assertTrue($categorie->getSlug() === 'slug');
    }

    public function testIsFalse(): void
    {
        $categorie = new Categorie();

        $categorie->setNom('Nom')
                  ->setDescription('Description')
                  ->setSlug('slug')
        ;

        $this->assertFalse($categorie->getNom() === 'false');
        $this->assertFalse($categorie->getDescription() === 'false');
        $this->assertFalse($categorie->getSlug() === 'false');
    }

    public function testIsEmpty(): void
    {
        $categorie = new Categorie();

        $this->assertEmpty($categorie->getNom());
        $this->assertEmpty($categorie->getDescription());
        $this->assertEmpty($categorie->getSlug());
    }
}
