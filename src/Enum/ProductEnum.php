<?php

namespace App\Enum;

enum ProductEnum: string
{
    public static function getDiscoveredClasses(): array
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
