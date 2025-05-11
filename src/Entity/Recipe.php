<?php

namespace App\Entity;

use App\Domain\Recipe\Enum\RecipeSourceEnum;
use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecipeRepository::class)]
readonly class Recipe
{
    public function __construct(
        #[ORM\Id]
        #[ORM\Column(length: 64)]
        public string $code,
        #[ORM\Column(length: 255)]
        public string $name,
        #[ORM\Column(enumType: RecipeSourceEnum::class)]
        public RecipeSourceEnum $source,
        #[ORM\Column(type: 'json')]
        public array $ingredients
    ) {}
}
