<?php

namespace App\Domain\Recipe\Provider;
use App\Domain\Recipe\Exception\RecipeNotFoundException;
use App\Entity\Recipe;

interface ProviderInterface
{
    public function supports(string $url): bool;

    /**
     * @throws RecipeNotFoundException
     */
    public function getRecipe(string $url): Recipe;
}