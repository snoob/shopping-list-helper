<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use App\Enum\ProductEnum;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Elao\Enum\Enum;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach (ProductEnum::getDiscoveredClasses() as $enumClass) {
            $reflectionClass = new \ReflectionClass($enumClass);
            $category = new Category(strtolower(substr($reflectionClass->getShortName(), 0, -4)));
            $manager->persist($category);
            foreach ($reflectionClass->getMethod('values')->invoke(null) as $productName) {
                $manager->persist(new Product($category, $productName));
            }
        }

        $manager->flush();
    }
}
