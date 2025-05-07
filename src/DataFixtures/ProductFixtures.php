<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use App\Enum\AlcoolEnum;
use App\Enum\AnimalerieEnum;
use App\Enum\BebeEnum;
use App\Enum\BioEnum;
use App\Enum\BoissonEnum;
use App\Enum\CharcuterieEnum;
use App\Enum\CondimentEnum;
use App\Enum\ConserveEnum;
use App\Enum\EntretienEnum;
use App\Enum\EpicerieSale;
use App\Enum\EpicerieSucre;
use App\Enum\FeculentEnum;
use App\Enum\FournitureEnum;
use App\Enum\FruitEnum;
use App\Enum\HygieneEnum;
use App\Enum\LaitageEnum;
use App\Enum\LegumeEnum;
use App\Enum\PateEnum;
use App\Enum\PatisserieEnum;
use App\Enum\PetitDejeunerEnum;
use App\Enum\ProductEnum;
use App\Enum\SalleDeBainEnum;
use App\Enum\SurgeleEnum;
use App\Enum\ViandeEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        foreach (self::getProductEnumClasses() as $enumClass) {
            $reflectionEnum = new \ReflectionEnum($enumClass);
            $category = new Category(strtolower(substr($reflectionEnum->getShortName(), 0, -4)));
            $manager->persist($category);
            foreach ($reflectionEnum->getCases() as $productEnum) {
                $manager->persist(new Product($category, $productEnum->getValue()->value));
            }
        }

        $manager->flush();
    }

    /**
     * @return array<int, class-string<\BackedEnum>>
     */
    private static  function getProductEnumClasses(): array
    {
        return [
            LegumeEnum::class,
            FruitEnum::class,
            CharcuterieEnum::class,
            ViandeEnum::class,
            PateEnum::class,
            AlcoolEnum::class,
            BoissonEnum::class,
            EpicerieSucre::class,
            BioEnum::class,
            FeculentEnum::class,
            CondimentEnum::class,
            ConserveEnum::class,
            EpicerieSale::class,
            PatisserieEnum::class,
            PetitDejeunerEnum::class,
            LaitageEnum::class,
            HygieneEnum::class,
            SalleDeBainEnum::class,
            EntretienEnum::class,
            AnimalerieEnum::class,
            FournitureEnum::class,
            BebeEnum::class,
            SurgeleEnum::class
        ];
    }
}
