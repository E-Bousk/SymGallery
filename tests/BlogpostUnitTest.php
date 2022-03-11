<?php

namespace App\Tests;

use App\Entity\Blogpost;
use DateTime;
use PHPUnit\Framework\TestCase;

class BlogpostUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();

        $blogpost->setTitre('Titre')
                 ->setContenu('contenu')
                 ->setCreatedAt($datetime)
                 ->setSlug('slug')
        ;

        $this->assertTrue($blogpost->getTitre() === 'Titre');
        $this->assertTrue($blogpost->getContenu() === 'contenu');
        $this->assertTrue($blogpost->getCreatedAt() === $datetime);
        $this->assertTrue($blogpost->getSlug() === 'slug');
    }

    public function testIsFalse(): void
    {
        $blogpost = new Blogpost();
        $datetime = new DateTime();

        $blogpost->setTitre('Titre')
                 ->setContenu('contenu')
                 ->setCreatedAt($datetime)
                 ->setSlug('slug')
        ;

        $this->assertFalse($blogpost->getTitre() === 'false');
        $this->assertFalse($blogpost->getContenu() === 'false');
        $this->assertFalse($blogpost->getCreatedAt() === new DateTime());
        $this->assertFalse($blogpost->getSlug() === 'false');
    }

    public function testIsEmpty(): void
    {
        $blogpost = new Blogpost();

        $this->assertEmpty($blogpost->getTitre());
        $this->assertEmpty($blogpost->getContenu());
        $this->assertEmpty($blogpost->getCreatedAt());
        $this->assertEmpty($blogpost->getSlug());
    }
}
