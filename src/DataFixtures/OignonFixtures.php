<?php

namespace App\DataFixtures;

use App\Entity\Oignon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OignonFixtures extends Fixture
{
    private const OBJECT_REFERENCE = 'Oignon';

    public function load(ObjectManager $manager): void
    {
        $nomsObjects = [
            'Rouge',
            'Blanc',
            'Noir',
            'Jaune'

        ];

        foreach ($nomsObjects as $key => $nomObject) {
            $object = new Oignon();
            $object->setName($nomObject);
            $manager->persist($object);
            $this->addReference(self::OBJECT_REFERENCE . '_' . $key, $object);
        }

        $manager->flush();
    }
}
