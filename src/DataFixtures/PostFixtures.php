<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Create 5 test posts
        for ($i = 1; $i <= 5; $i++) {
            $post = new Post();
            $post->setTitle("Sample Post $i");
            $post->setContent("This is the content of post $i.");
            $post->setCreatedAt(new \DateTimeImmutable());

            $manager->persist($post);
        }

        $manager->flush();
    }
}
