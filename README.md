# donkey_wine

step 0

mcd de la db (voir dossier db)
initialisation du projet 
installation des dependance

        composer require --dev symfony/profiler-pack 

        composer require symfony/maker-bundle --dev

        composer require symfony/orm-pack --dev

        composer require --dev orm-fixtures

        composer require symfony/webpack-encore-bundle

        npm i

        npm install bootstrap --save-dev


conviguration de la db dans le fichier .env 

        symfony console doctrine:database:create


création des deux entity 

            symfony console make:entity
            
            symfony console d:s:u -f

-Storage
-Bottle

step 1

création des fixtures

        symfony console make:fixtures

-storage invention des données 
création des const et ajout de $this->addReference(self::NOM de la constante, $variable)

-bootle -> https://www.hachette-vins.com/hub/guide-vins/  (merci copilote)

ajoute de use Doctrine\Common\DataFixtures\DependentFixtureInterface; et implements DependentFixtureInterface a la class BottleFixtures
création de la function getDependencies() pour pouvoir réquperer les constante crée dans StorageFixtures
ajout de $this->getReference(StorageFixtures::NOM_DE_LA-CONSTANTE_VOULU) pour impléménter ->setStorage()

    symfony console doctrine:fixtures:load -n
               
désactivation de copilote pour finir le projet 



création des formulaire

    symfony console make:form

    
