<?php

namespace App\DataFixtures;

use App\Entity\Bottle;
use App\Entity\Storage;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class BottleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $branaireDucru = new Bottle();
        $branaireDucru->setBottleName('CHÂTEAU BRANAIRE-DUCRU');
        $branaireDucru->setBottleType('Red');
        $branaireDucru->setBottleYear('2020');
        $branaireDucru->setWineMaker('Patrick Maroteaux');
        $branaireDucru->setCountry('France');
        $branaireDucru->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_YOUNG_ONE));
        $manager->persist($branaireDucru);

        $chateauMargaux = new Bottle();
        $chateauMargaux->setBottleName('CHÂTEAU MARGAUX');
        $chateauMargaux->setBottleType('Red');
        $chateauMargaux->setBottleYear('2018');
        $chateauMargaux->setWineMaker('Philippe Bascaules');
        $chateauMargaux->setCountry('France');
        $chateauMargaux->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_YOUNG_ONE));
        $manager->persist($chateauMargaux);

        $chateauMalartic = new Bottle();
        $chateauMalartic->setBottleName('CHÂTEAU MALARTIC-LAGRAVIÈRE');
        $chateauMalartic->setBottleType('Red');
        $chateauMalartic->setBottleYear('2018');
        $chateauMalartic->setWineMaker('Jean-Jacques Bonnie');
        $chateauMalartic->setCountry('France');
        $chateauMalartic->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_YOUNG_TWO));
        $manager->persist($chateauMalartic);

        $chateauPichon = new Bottle();
        $chateauPichon->setBottleName('CHÂTEAU PICHON LONGUEVILLE COMTESSE DE LALANDE');
        $chateauPichon->setBottleType('Red');
        $chateauPichon->setBottleYear('2018');
        $chateauPichon->setWineMaker('Nicolas Glumineau');
        $chateauPichon->setCountry('France');
        $chateauPichon->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_YOUNG_TWO));
        $manager->persist($chateauPichon);

        $chateauPontet = new Bottle();
        $chateauPontet->setBottleName('CHÂTEAU PONTET-CANET');
        $chateauPontet->setBottleType('Red');
        $chateauPontet->setBottleYear('2018');
        $chateauPontet->setWineMaker('Jean-Michel Comme');
        $chateauPontet->setCountry('France');
        $chateauPontet->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_YOUNG_THREE));
        $manager->persist($chateauPontet);

        $chateauRauzan = new Bottle();
        $chateauRauzan->setBottleName('CHÂTEAU RAUZAN-SÉGLA');
        $chateauRauzan->setBottleType('Red');
        $chateauRauzan->setBottleYear('2018');
        $chateauRauzan->setWineMaker('Nicolas Audebert');
        $chateauRauzan->setCountry('France');
        $chateauRauzan->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_YOUNG_THREE));
        $manager->persist($chateauRauzan);

        $chateauTalbot = new Bottle();
        $chateauTalbot->setBottleName('CHÂTEAU TALBOT');
        $chateauTalbot->setBottleType('Red');
        $chateauTalbot->setBottleYear('1856');
        $chateauTalbot->setWineMaker('Jean-Michel Laporte');
        $chateauTalbot->setCountry('France');
        $chateauTalbot->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_OLD_ONE));
        $manager->persist($chateauTalbot);

        $chateauBeychevelle = new Bottle();
        $chateauBeychevelle->setBottleName('CHÂTEAU BEYCHEVELLE');
        $chateauBeychevelle->setBottleType('Red');
        $chateauBeychevelle->setBottleYear('1915');
        $chateauBeychevelle->setWineMaker('Romain Ducolomb');
        $chateauBeychevelle->setCountry('France');
        $chateauBeychevelle->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_OLD_ONE));
        $manager->persist($chateauBeychevelle);

        $chateauBrane = new Bottle();
        $chateauBrane->setBottleName('CHÂTEAU BRANE-CANTENAC');
        $chateauBrane->setBottleType('Red');
        $chateauBrane->setBottleYear('1915');
        $chateauBrane->setWineMaker('Henri Lurton');
        $chateauBrane->setCountry('France');
        $chateauBrane->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_OLD_TWO));
        $manager->persist($chateauBrane);

        $chateauCalon = new Bottle();
        $chateauCalon->setBottleName('CHÂTEAU CALON-SÉGLA');
        $chateauCalon->setBottleType('Red');
        $chateauCalon->setBottleYear('1915');
        $chateauCalon->setWineMaker('Vincent Millet');
        $chateauCalon->setCountry('France');
        $chateauCalon->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_OLD_TWO));
        $manager->persist($chateauCalon);

        $chateauCanon = new Bottle();
        $chateauCanon->setBottleName('CHÂTEAU CANON');
        $chateauCanon->setBottleType('Red');
        $chateauCanon->setBottleYear('1915');
        $chateauCanon->setWineMaker('Nicolas Audebert');
        $chateauCanon->setCountry('France');
        $chateauCanon->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_OLD_THREE));
        $manager->persist($chateauCanon);

        $chateauCantenac = new Bottle();
        $chateauCantenac->setBottleName('CHÂTEAU CANTENAC-BROWN');
        $chateauCantenac->setBottleType('Red');
        $chateauCantenac->setBottleYear('1915');
        $chateauCantenac->setWineMaker('José Sanfins');
        $chateauCantenac->setCountry('France');
        $chateauCantenac->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_RED_OLD_THREE));
        $manager->persist($chateauCantenac);

        $chateauClerc = new Bottle();
        $chateauClerc->setBottleName('CHÂTEAU CLERC-MILON');
        $chateauClerc->setBottleType('White');
        $chateauClerc->setBottleYear('2018');
        $chateauClerc->setWineMaker('Jean-Emmanuel Danjoy');
        $chateauClerc->setCountry('France');
        $chateauClerc->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_YOUNG_ONE));
        $manager->persist($chateauClerc);

        $chateauDassault = new Bottle();
        $chateauDassault->setBottleName('CHÂTEAU DASSAULT');
        $chateauDassault->setBottleType('White');
        $chateauDassault->setBottleYear('2018');
        $chateauDassault->setWineMaker('Laurent Fortin');
        $chateauDassault->setCountry('France');
        $chateauDassault->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_YOUNG_ONE));
        $manager->persist($chateauDassault);

        $chateauDoisy = new Bottle();
        $chateauDoisy->setBottleName('CHÂTEAU DOISY DAËNE');
        $chateauDoisy->setBottleType('White');
        $chateauDoisy->setBottleYear('2018');
        $chateauDoisy->setWineMaker('Denis Dubourdieu');
        $chateauDoisy->setCountry('France');
        $chateauDoisy->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_YOUNG_TWO));
        $manager->persist($chateauDoisy);

        $chateauFieuzal = new Bottle();
        $chateauFieuzal->setBottleName('CHÂTEAU DE FIEUZAL');
        $chateauFieuzal->setBottleType('White');
        $chateauFieuzal->setBottleYear('2018');
        $chateauFieuzal->setWineMaker('Stephen Carrier');
        $chateauFieuzal->setCountry('France');
        $chateauFieuzal->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_YOUNG_TWO));
        $manager->persist($chateauFieuzal);

        $chateauGazin = new Bottle();
        $chateauGazin->setBottleName('CHÂTEAU GAZIN');
        $chateauGazin->setBottleType('White');
        $chateauGazin->setBottleYear('2018');
        $chateauGazin->setWineMaker('Guillaume Néron-Bancel');
        $chateauGazin->setCountry('France');
        $chateauGazin->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_YOUNG_THREE));
        $manager->persist($chateauGazin);

        $chateauGiscours = new Bottle();
        $chateauGiscours->setBottleName('CHÂTEAU GISCOURS');
        $chateauGiscours->setBottleType('White');
        $chateauGiscours->setBottleYear('2018');
        $chateauGiscours->setWineMaker('Alexandre Van Beek');
        $chateauGiscours->setCountry('France');
        $chateauGiscours->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_YOUNG_THREE));
        $manager->persist($chateauGiscours);

        $chateauGrand = new Bottle();
        $chateauGrand->setBottleName('CHÂTEAU GRAND-PUY-DUCASSE');
        $chateauGrand->setBottleType('White');
        $chateauGrand->setBottleYear('1856');
        $chateauGrand->setWineMaker('Emmanuel Cruse');
        $chateauGrand->setCountry('France');
        $chateauGrand->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_OLD_ONE));
        $manager->persist($chateauGrand);

        $chateauGruaud = new Bottle();
        $chateauGruaud->setBottleName('CHÂTEAU GRUAUD-LAROSE');
        $chateauGruaud->setBottleType('White');
        $chateauGruaud->setBottleYear('1915');
        $chateauGruaud->setWineMaker('Jean Merlaut');
        $chateauGruaud->setCountry('France');
        $chateauGruaud->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_OLD_ONE));
        $manager->persist($chateauGruaud);

        $chateauHaut = new Bottle();
        $chateauHaut->setBottleName('CHÂTEAU HAUT-BAILLY');
        $chateauHaut->setBottleType('White');
        $chateauHaut->setBottleYear('1915');
        $chateauHaut->setWineMaker('Véronique Sanders');
        $chateauHaut->setCountry('France');
        $chateauHaut->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_OLD_TWO));
        $manager->persist($chateauHaut);

        $chateauHautBailly = new Bottle();
        $chateauHautBailly->setBottleName('CHÂTEAU HAUT-BAILLY');
        $chateauHautBailly->setBottleType('White');
        $chateauHautBailly->setBottleYear('1915');
        $chateauHautBailly->setWineMaker('Véronique Sanders');
        $chateauHautBailly->setCountry('France');
        $chateauHautBailly->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_OLD_TWO));
        $manager->persist($chateauHautBailly);

        $chateauHautBailly = new Bottle();
        $chateauHautBailly->setBottleName('CHÂTEAU HAUT-BAILLY');
        $chateauHautBailly->setBottleType('White');
        $chateauHautBailly->setBottleYear('1915');
        $chateauHautBailly->setWineMaker('Véronique Sanders');
        $chateauHautBailly->setCountry('France');
        $chateauHautBailly->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_OLD_THREE));
        $manager->persist($chateauHautBailly);

        $chateauHautMeddoc = new Bottle();
        $chateauHautMeddoc->setBottleName('CHÂTEAU HAUT-MÉDOC');
        $chateauHautMeddoc->setBottleType('White');
        $chateauHautMeddoc->setBottleYear('1915');
        $chateauHautMeddoc->setWineMaker('Jean Merlaut');
        $chateauHautMeddoc->setCountry('France');
        $chateauHautMeddoc->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_WINE_WHITE_OLD_THREE));
        $manager->persist($chateauHautMeddoc);

        $chamapgneRenoir = new Bottle();
        $chamapgneRenoir->setBottleName('CHAMPAGNE RENOIR');
        $chamapgneRenoir->setBottleType('Champagne');
        $chamapgneRenoir->setBottleYear('2018');
        $chamapgneRenoir->setWineMaker('Jean-Emmanuel Danjoy');
        $chamapgneRenoir->setCountry('France');
        $chamapgneRenoir->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_YOUNG_ONE));
        $manager->persist($chamapgneRenoir);

        $champagneBillecart = new Bottle();
        $champagneBillecart->setBottleName('CHAMPAGNE BILLECART-SALMON');
        $champagneBillecart->setBottleType('Champagne');
        $champagneBillecart->setBottleYear('2018');
        $champagneBillecart->setWineMaker('François Roland-Billecart');
        $champagneBillecart->setCountry('France');
        $champagneBillecart->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_YOUNG_ONE));
        $manager->persist($champagneBillecart);

        $champagneBollinger = new Bottle();
        $champagneBollinger->setBottleName('CHAMPAGNE BOLLINGER');
        $champagneBollinger->setBottleType('Champagne');
        $champagneBollinger->setBottleYear('2018');
        $champagneBollinger->setWineMaker('Gilles Descôtes');
        $champagneBollinger->setCountry('France');
        $champagneBollinger->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_YOUNG_TWO));
        $manager->persist($champagneBollinger);

        $champagneCharles = new Bottle();
        $champagneCharles->setBottleName('CHAMPAGNE CHARLES HEIDSIECK');
        $champagneCharles->setBottleType('Champagne');
        $champagneCharles->setBottleYear('2018');
        $champagneCharles->setWineMaker('Cyril Brun');
        $champagneCharles->setCountry('France');
        $champagneCharles->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_YOUNG_TWO));
        $manager->persist($champagneCharles);

        $champagneDeutz = new Bottle();
        $champagneDeutz->setBottleName('CHAMPAGNE DEUTZ');
        $champagneDeutz->setBottleType('Champagne');
        $champagneDeutz->setBottleYear('2018');
        $champagneDeutz->setWineMaker('Fabrice Rosset');
        $champagneDeutz->setCountry('France');
        $champagneDeutz->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_YOUNG_THREE));
        $manager->persist($champagneDeutz);

        $champagneDom = new Bottle();
        $champagneDom->setBottleName('CHAMPAGNE DOM PÉRIGNON');
        $champagneDom->setBottleType('Champagne');
        $champagneDom->setBottleYear('2018');
        $champagneDom->setWineMaker('Vincent Chaperon');
        $champagneDom->setCountry('France');
        $champagneDom->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_YOUNG_THREE));
        $manager->persist($champagneDom);

        $champagneGosset = new Bottle();
        $champagneGosset->setBottleName('CHAMPAGNE GOSSET');
        $champagneGosset->setBottleType('Champagne');
        $champagneGosset->setBottleYear('1856');
        $champagneGosset->setWineMaker('Odilon de Varine');
        $champagneGosset->setCountry('France');
        $champagneGosset->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_OLD_ONE));
        $manager->persist($champagneGosset);

        $champagneKrug = new Bottle();
        $champagneKrug->setBottleName('CHAMPAGNE KRUG');
        $champagneKrug->setBottleType('Champagne');
        $champagneKrug->setBottleYear('1915');
        $champagneKrug->setWineMaker('Julie Cavil');
        $champagneKrug->setCountry('France');
        $champagneKrug->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_OLD_ONE));
        $manager->persist($champagneKrug);

        $champagneLaurent = new Bottle();
        $champagneLaurent->setBottleName('CHAMPAGNE LAURENT-PERRIER');
        $champagneLaurent->setBottleType('Champagne');
        $champagneLaurent->setBottleYear('1915');
        $champagneLaurent->setWineMaker('Stéphane Dalyac');
        $champagneLaurent->setCountry('France');
        $champagneLaurent->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_OLD_TWO));
        $manager->persist($champagneLaurent);

        $champagneLouis = new Bottle();
        $champagneLouis->setBottleName('CHAMPAGNE LOUIS ROEDERER');
        $champagneLouis->setBottleType('Champagne');
        $champagneLouis->setBottleYear('1915');
        $champagneLouis->setWineMaker('Jean-Baptiste Lécaillon');
        $champagneLouis->setCountry('France');
        $champagneLouis->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_OLD_TWO));
        $manager->persist($champagneLouis);

        $champagneMoet = new Bottle();
        $champagneMoet->setBottleName('CHAMPAGNE MOËT & CHANDON');
        $champagneMoet->setBottleType('Champagne');
        $champagneMoet->setBottleYear('1915');
        $champagneMoet->setWineMaker('Benoît Gouez');
        $champagneMoet->setCountry('France');
        $champagneMoet->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_OLD_THREE));
        $manager->persist($champagneMoet);

        $champagnePerrier = new Bottle();
        $champagnePerrier->setBottleName('CHAMPAGNE PERRIER-JOUËT');
        $champagnePerrier->setBottleType('Champagne');
        $champagnePerrier->setBottleYear('1915');
        $champagnePerrier->setWineMaker('Hervé Deschamps');
        $champagnePerrier->setCountry('France');
        $champagnePerrier->setStorage($this->getReference(StorageFixtures::STORAGE_CASSIER_CHAMPAGNE_OLD_THREE));
        $manager->persist($champagnePerrier);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            StorageFixtures::class,
        ];
    }
}


