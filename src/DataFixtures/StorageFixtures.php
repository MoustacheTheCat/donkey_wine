<?php

namespace App\DataFixtures;

use App\Entity\Storage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StorageFixtures extends Fixture
{
    public const STORAGE_CAVE_WINE_RED_YOUNG = 'Cave wine red young';
    public const STORAGE_CAVE_WINE_RED_OLD = 'Cave wine red old';
    public const STORAGE_CAVE_WINE_WHITE_YOUNG = 'Cave wine white young';
    public const STORAGE_CAVE_WINE_WHITE_OLD = 'Cave wine white old';
    public const STORAGE_CAVE_CHAMPAGNE_YOUNG = 'Cave champagne young';
    public const STORAGE_CAVE_CHAMPAGNE_OLD = 'Cave champagne old';
    public const STORAGE_CASSIER_WINE_RED_YOUNG_ONE = 'Cassier wine red young one';
    public const STORAGE_CASSIER_WINE_RED_YOUNG_TWO = 'Cassier wine red young two';
    public const STORAGE_CASSIER_WINE_RED_YOUNG_THREE = 'Cassier wine red young three';
    public const STORAGE_CASSIER_WINE_RED_OLD_ONE = 'Cassier wine red old one';
    public const STORAGE_CASSIER_WINE_RED_OLD_TWO = 'Cassier wine red old two';
    public const STORAGE_CASSIER_WINE_RED_OLD_THREE = 'Cassier wine red old three';
    public const STORAGE_CASSIER_WINE_WHITE_YOUNG_ONE = 'Cassier wine white young one';
    public const STORAGE_CASSIER_WINE_WHITE_YOUNG_TWO = 'Cassier wine white young two';
    public const STORAGE_CASSIER_WINE_WHITE_YOUNG_THREE = 'Cassier wine white young three';
    public const STORAGE_CASSIER_WINE_WHITE_OLD_ONE = 'Cassier wine white old one';
    public const STORAGE_CASSIER_WINE_WHITE_OLD_TWO = 'Cassier wine white old two';
    public const STORAGE_CASSIER_WINE_WHITE_OLD_THREE = 'Cassier wine white old three';
    public const STORAGE_CASSIER_CHAMPAGNE_YOUNG_ONE = 'Cassier champagne young one';
    public const STORAGE_CASSIER_CHAMPAGNE_YOUNG_TWO = 'Cassier champagne young two';
    public const STORAGE_CASSIER_CHAMPAGNE_YOUNG_THREE = 'Cassier champagne young three';
    public const STORAGE_CASSIER_CHAMPAGNE_OLD_ONE = 'Cassier champagne old one';
    public const STORAGE_CASSIER_CHAMPAGNE_OLD_TWO = 'Cassier champagne old two';
    public const STORAGE_CASSIER_CHAMPAGNE_OLD_THREE = 'Cassier champagne old three';

    public function load(ObjectManager $manager): void
    {
        $caveWineRedYoung = new Storage();
        $caveWineRedYoung->setStorageReference(1);
        $caveWineRedYoung->setStorageName('Cave wine red young');
        $manager->persist($caveWineRedYoung);
        $this->addReference(self::STORAGE_CAVE_WINE_RED_YOUNG, $caveWineRedYoung);

        $caveWineRedOld = new Storage();
        $caveWineRedOld->setStorageReference(2);
        $caveWineRedOld->setStorageName('Cave wine red old');
        $manager->persist($caveWineRedOld);
        $this->addReference(self::STORAGE_CAVE_WINE_RED_OLD, $caveWineRedOld);

        $caveWineWhiteYoung = new Storage();
        $caveWineWhiteYoung->setStorageReference(3);
        $caveWineWhiteYoung->setStorageName('Cave wine white young');
        $manager->persist($caveWineWhiteYoung);
        $this->addReference(self::STORAGE_CAVE_WINE_WHITE_YOUNG, $caveWineWhiteYoung);

        $caveWineWhiteOld = new Storage();
        $caveWineWhiteOld->setStorageReference(4);
        $caveWineWhiteOld->setStorageName('Cave wine white old');
        $manager->persist($caveWineWhiteOld);
        $this->addReference(self::STORAGE_CAVE_WINE_WHITE_OLD, $caveWineWhiteOld);

        $caveChampagneYoung = new Storage();
        $caveChampagneYoung->setStorageReference(5);
        $caveChampagneYoung->setStorageName('Cave champagne young');
        $manager->persist($caveChampagneYoung);
        $this->addReference(self::STORAGE_CAVE_CHAMPAGNE_YOUNG, $caveChampagneYoung);

        $caveChampagneOld = new Storage();
        $caveChampagneOld->setStorageReference(6);
        $caveChampagneOld->setStorageName('Cave champagne old');
        $manager->persist($caveChampagneOld);
        $this->addReference(self::STORAGE_CAVE_CHAMPAGNE_OLD, $caveChampagneOld);

        $cassierWineRedYoungOne = new Storage();
        $cassierWineRedYoungOne->setStorageReference(7);
        $cassierWineRedYoungOne->setStorageName('Cassier wine red young one');
        $cassierWineRedYoungOne->setParent($caveWineRedYoung);
        $manager->persist($cassierWineRedYoungOne);
        $this->addReference(self::STORAGE_CASSIER_WINE_RED_YOUNG_ONE, $cassierWineRedYoungOne);

        $cassierWineRedYoungTwo = new Storage();
        $cassierWineRedYoungTwo->setStorageReference(8);
        $cassierWineRedYoungTwo->setStorageName('Cassier wine red young two');
        $cassierWineRedYoungTwo->setParent($caveWineRedYoung);
        $manager->persist($cassierWineRedYoungTwo);
        $this->addReference(self::STORAGE_CASSIER_WINE_RED_YOUNG_TWO, $cassierWineRedYoungTwo);

        $cassierWineRedYoungThree = new Storage();
        $cassierWineRedYoungThree->setStorageReference(9);
        $cassierWineRedYoungThree->setStorageName('Cassier wine red young three');
        $cassierWineRedYoungThree->setParent($caveWineRedYoung);
        $manager->persist($cassierWineRedYoungThree);
        $this->addReference(self::STORAGE_CASSIER_WINE_RED_YOUNG_THREE, $cassierWineRedYoungThree);

        $cassierWineRedOldOne = new Storage();
        $cassierWineRedOldOne->setStorageReference(10);
        $cassierWineRedOldOne->setStorageName('Cassier wine red old one');
        $cassierWineRedOldOne->setParent($caveWineRedOld);
        $manager->persist($cassierWineRedOldOne);
        $this->addReference(self::STORAGE_CASSIER_WINE_RED_OLD_ONE, $cassierWineRedOldOne);

        $cassierWineRedOldTwo = new Storage();
        $cassierWineRedOldTwo->setStorageReference(11);
        $cassierWineRedOldTwo->setStorageName('Cassier wine red old two');
        $cassierWineRedOldTwo->setParent($caveWineRedOld);
        $manager->persist($cassierWineRedOldTwo);
        $this->addReference(self::STORAGE_CASSIER_WINE_RED_OLD_TWO, $cassierWineRedOldTwo);

        $cassierWineRedOldThree = new Storage();
        $cassierWineRedOldThree->setStorageReference(12);
        $cassierWineRedOldThree->setStorageName('Cassier wine red old three');
        $cassierWineRedOldThree->setParent($caveWineRedOld);
        $manager->persist($cassierWineRedOldThree);
        $this->addReference(self::STORAGE_CASSIER_WINE_RED_OLD_THREE, $cassierWineRedOldThree);

        $cassierWineWhiteYoungOne = new Storage();
        $cassierWineWhiteYoungOne->setStorageReference(13);
        $cassierWineWhiteYoungOne->setStorageName('Cassier wine white young one');
        $cassierWineWhiteYoungOne->setParent($caveWineWhiteYoung);
        $manager->persist($cassierWineWhiteYoungOne);
        $this->addReference(self::STORAGE_CASSIER_WINE_WHITE_YOUNG_ONE, $cassierWineWhiteYoungOne);

        $cassierWineWhiteYoungTwo = new Storage();
        $cassierWineWhiteYoungTwo->setStorageReference(14);
        $cassierWineWhiteYoungTwo->setStorageName('Cassier wine white young two');
        $cassierWineWhiteYoungTwo->setParent($caveWineWhiteYoung);
        $manager->persist($cassierWineWhiteYoungTwo);
        $this->addReference(self::STORAGE_CASSIER_WINE_WHITE_YOUNG_TWO, $cassierWineWhiteYoungTwo);

        $cassierWineWhiteYoungThree = new Storage();
        $cassierWineWhiteYoungThree->setStorageReference(15);
        $cassierWineWhiteYoungThree->setStorageName('Cassier wine white young three');
        $cassierWineWhiteYoungThree->setParent($caveWineWhiteYoung);
        $manager->persist($cassierWineWhiteYoungThree);
        $this->addReference(self::STORAGE_CASSIER_WINE_WHITE_YOUNG_THREE, $cassierWineWhiteYoungThree);

        $cassierWineWhiteOldOne = new Storage();
        $cassierWineWhiteOldOne->setStorageReference(16);
        $cassierWineWhiteOldOne->setStorageName('Cassier wine white old one');
        $cassierWineWhiteOldOne->setParent($caveWineWhiteOld);
        $manager->persist($cassierWineWhiteOldOne);
        $this->addReference(self::STORAGE_CASSIER_WINE_WHITE_OLD_ONE, $cassierWineWhiteOldOne);

        $cassierWineWhiteOldTwo = new Storage();
        $cassierWineWhiteOldTwo->setStorageReference(17);
        $cassierWineWhiteOldTwo->setStorageName('Cassier wine white old two');
        $cassierWineWhiteOldTwo->setParent($caveWineWhiteOld);
        $manager->persist($cassierWineWhiteOldTwo);
        $this->addReference(self::STORAGE_CASSIER_WINE_WHITE_OLD_TWO, $cassierWineWhiteOldTwo);

        $cassierWineWhiteOldThree = new Storage();
        $cassierWineWhiteOldThree->setStorageReference(18);
        $cassierWineWhiteOldThree->setStorageName('Cassier wine white old three');
        $cassierWineWhiteOldThree->setParent($caveWineWhiteOld);
        $manager->persist($cassierWineWhiteOldThree);
        $this->addReference(self::STORAGE_CASSIER_WINE_WHITE_OLD_THREE, $cassierWineWhiteOldThree);

        $cassierChampagneYoungOne = new Storage();
        $cassierChampagneYoungOne->setStorageReference(19);
        $cassierChampagneYoungOne->setStorageName('Cassier champagne young one');
        $cassierChampagneYoungOne->setParent($caveChampagneYoung);
        $manager->persist($cassierChampagneYoungOne);
        $this->addReference(self::STORAGE_CASSIER_CHAMPAGNE_YOUNG_ONE, $cassierChampagneYoungOne);

        $cassierChampagneYoungTwo = new Storage();
        $cassierChampagneYoungTwo->setStorageReference(20);
        $cassierChampagneYoungTwo->setStorageName('Cassier champagne young two');
        $cassierChampagneYoungTwo->setParent($caveChampagneYoung);
        $manager->persist($cassierChampagneYoungTwo);
        $this->addReference(self::STORAGE_CASSIER_CHAMPAGNE_YOUNG_TWO, $cassierChampagneYoungTwo);

        $cassierChampagneYoungThree = new Storage();
        $cassierChampagneYoungThree->setStorageReference(21);
        $cassierChampagneYoungThree->setStorageName('Cassier champagne young three');
        $cassierChampagneYoungThree->setParent($caveChampagneYoung);
        $manager->persist($cassierChampagneYoungThree);
        $this->addReference(self::STORAGE_CASSIER_CHAMPAGNE_YOUNG_THREE, $cassierChampagneYoungThree);

        $cassierChampagneOldOne = new Storage();
        $cassierChampagneOldOne->setStorageReference(22);
        $cassierChampagneOldOne->setStorageName('Cassier champagne old one');
        $cassierChampagneOldOne->setParent($caveChampagneOld);
        $manager->persist($cassierChampagneOldOne);
        $this->addReference(self::STORAGE_CASSIER_CHAMPAGNE_OLD_ONE, $cassierChampagneOldOne);

        $cassierChampagneOldTwo = new Storage();
        $cassierChampagneOldTwo->setStorageReference(23);
        $cassierChampagneOldTwo->setStorageName('Cassier champagne old two');
        $cassierChampagneOldTwo->setParent($caveChampagneOld);
        $manager->persist($cassierChampagneOldTwo);
        $this->addReference(self::STORAGE_CASSIER_CHAMPAGNE_OLD_TWO, $cassierChampagneOldTwo);

        $cassierChampagneOldThree = new Storage();
        $cassierChampagneOldThree->setStorageReference(24);
        $cassierChampagneOldThree->setStorageName('Cassier champagne old three');
        $cassierChampagneOldThree->setParent($caveChampagneOld);
        $manager->persist($cassierChampagneOldThree);
        $this->addReference(self::STORAGE_CASSIER_CHAMPAGNE_OLD_THREE, $cassierChampagneOldThree);

        $manager->flush();
    }
}



