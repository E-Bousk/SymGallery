<?php

namespace App\Tests;

use App\Entity\Blogpost;
use App\Entity\Commentaire;
use App\Entity\Peinture;
use DateTime;
use PHPUnit\Framework\TestCase;

class CommentaireUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $commentaire = new Commentaire();
        $blogpost = new Blogpost();
        $peinture = new Peinture();
        $datetime = new DateTime();

        $commentaire->setAuteur('Auteur')
                    ->setEmail('true@test.com')
                    ->setContenu('Contenu')
                    ->setCreatedAt($datetime)
                    ->setBlogpost($blogpost)
                    ->setPeinture($peinture)
        ;

        $this->assertTrue($commentaire->getAuteur() === 'Auteur');
        $this->assertTrue($commentaire->getEmail() === 'true@test.com');
        $this->assertTrue($commentaire->getContenu() === 'Contenu');
        $this->assertTrue($commentaire->getCreatedAt() === $datetime);
        $this->assertTrue($commentaire->getBlogpost() === $blogpost);
        $this->assertTrue($commentaire->getPeinture() === $peinture);
    }

    public function testIsFalse(): void
    {
        $commentaire = new Commentaire();
        $blogpost = new Blogpost();
        $peinture = new Peinture();
        $datetime = new DateTime();

        $commentaire->setAuteur('Auteur')
                    ->setEmail('true@test.com')
                    ->setContenu('Contenu')
                    ->setCreatedAt($datetime)
                    ->setBlogpost($blogpost)
                    ->setPeinture($peinture)
        ;

        $this->assertFalse($commentaire->getAuteur() === 'false');
        $this->assertFalse($commentaire->getEmail() === 'false@test.com');
        $this->assertFalse($commentaire->getContenu() === 'false');
        $this->assertFalse($commentaire->getCreatedAt() === new Datetime());
        $this->assertFalse($commentaire->getBlogpost() === new Blogpost());
        $this->assertFalse($commentaire->getPeinture() === new Peinture());
    }

    public function testIsEmpty(): void
    {
        $commentaire = new Commentaire();

        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getBlogpost());
        $this->assertEmpty($commentaire->getPeinture());
    }
}
