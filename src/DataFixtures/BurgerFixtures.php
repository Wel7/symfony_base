<?php

namespace App\DataFixtures;

use App\Entity\Burger;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class BurgerFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $pain0 = $this->getReference('Pain_0');
        $oignon0 = $this->getReference('Oignon_0');
        $sauce0 = $this->getReference('Sauce_0');
        $image0 = $this->getReference('Image_0');
        $commentaire0 = $this->getReference('Commentaire_0');

        $burger0 = new Burger();
        $burger0->setName('Burger classique')
            ->setPrice('9.99')
            ->setPain($pain0)
            ->addOignon($oignon0)
            ->addSauce($sauce0)
            ->setImage($image0)
            ->addCommentaire($commentaire0);

        $pain1 = $this->getReference('Pain_1');
        $oignon1 = $this->getReference('Oignon_1');
        $sauce1 = $this->getReference('Sauce_1');
        $image1 = $this->getReference('Image_1');
        $commentaire1 = $this->getReference('Commentaire_1');

        $burger1 = new Burger();
        $burger1->setName('Burger bacon')
            ->setPrice('11.99')
            ->setPain($pain1)
            ->addOignon($oignon1)
            ->addSauce($sauce1)
            ->setImage($image1)
            ->addCommentaire($commentaire1);

        $pain2 = $this->getReference('Pain_2');
        $oignon2 = $this->getReference('Oignon_2');
        $sauce2 = $this->getReference('Sauce_2');
        $image2 = $this->getReference('Image_2');
        $commentaire2 = $this->getReference('Commentaire_2');

        $burger2 = new Burger();
        $burger2->setName('Burger végétarien')
            ->setPrice('8.99')
            ->setPain($pain2)
            ->addOignon($oignon2)
            ->addSauce($sauce2)
            ->setImage($image2)
            ->addCommentaire($commentaire2);

        $pain3 = $this->getReference('Pain_3');
        $oignon3 = $this->getReference('Oignon_3');
        $sauce3 = $this->getReference('Sauce_3');
        $image3 = $this->getReference('Image_3');
        $commentaire3 = $this->getReference('Commentaire_3');

        $burger3 = new Burger();
        $burger3->setName('Burger poulet')
            ->setPrice('10.99')
            ->setPain($pain3)
            ->addOignon($oignon3)
            ->addSauce($sauce3)
            ->setImage($image3)
            ->addCommentaire($commentaire3);

        

        $manager->persist($burger0);
        $manager->persist($burger1);
        $manager->persist($burger2);
        $manager->persist($burger3);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            PainFixtures::class,
            OignonFixtures::class,
            SauceFixtures::class,
            ImageFixtures::class,
            CommentaireFixtures::class,
        ];
    }
}