<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
    private const OBJECT_REFERENCE = 'Image';

        public function load(ObjectManager $manager): void
    {
        $nomsObjects = [
            'https://curlytales.com/wp-content/uploads/2023/04/Goofy-Cow-Burger.jpg',
            'https://steamuserimages-a.akamaihd.net/ugc/1761490143779241451/B3EB065C28CA130D23872F8545A722985CE388AD/?imw=637&imh=358&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=true',
            'https://i.ytimg.com/vi/VldDNghLCEM/maxresdefault.jpg?sqp=-oaymwEmCIAKENAF8quKqQMa8AEB-AH-CYAC0AWKAgwIABABGH8gTyglMA8=&rs=AOn4CLBrFuYeGZSiUgMRtqDgxWdevZfSqg',
            'https://ih1.redbubble.net/image.4609101051.5604/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg'

        ];

        foreach ($nomsObjects as $key => $nomObject) {
            $object = new Image();
            $object->setLien($nomObject);
            $manager->persist($object);
            $this->addReference(self::OBJECT_REFERENCE . '_' . $key, $object);
        }

        $manager->flush();
    }
}
