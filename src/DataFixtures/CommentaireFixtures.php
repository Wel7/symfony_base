<?php

namespace App\DataFixtures;

use App\Entity\Commentaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentaireFixtures extends Fixture

{
    private const OBJECT_REFERENCE = 'Commentaire';

    public function load(ObjectManager $manager): void
    {
        $nomsObjects = [
            'Bien',
            'Pas ouf',
            'Moyen',
            'Nul'

        ];

        foreach ($nomsObjects as $key => $nomObject) {
            $object = new Commentaire();
            $object->setText($nomObject);
            $manager->persist($object);
            $this->addReference(self::OBJECT_REFERENCE . '_' . $key, $object);
        }

        $manager->flush();
    }
}
