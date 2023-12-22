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

        npm install sass-loader@^13.0.0 sass --save-dev

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

step 2

création des controller 

    symfony console make:controller

création du crud de storage  et bottle 

template 

    all    -> index.html.twig
    show   -> show.html.twig
    add    -> new.html.twig + _form.html.twig
    edit   -> edit.html.twig + _form.html.twig
    delete -> _delete.html.twig

création des method dans chaque controller

ajout de

use App\Entity\<nom de Entity>;
use App\Form\<nom du Form>;
use App\Repository\<nom de Repository>;

#[Route('/<nom de route>')]

au début de chaque controller

step 3

        composer require --dev symfony/var-dumper

ajout du nom de stockage de chaque bouteille
