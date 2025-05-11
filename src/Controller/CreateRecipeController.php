<?php

namespace App\Controller;

use App\Domain\Recipe\Exception\RecipeNotFoundException;
use App\Domain\Recipe\Provider\ProviderInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

final class CreateRecipeController extends AbstractController
{
    public function __construct(
        private readonly ProviderInterface $recipeProvider,
        private readonly ValidatorInterface $validator,
        private readonly EntityManagerInterface $entityManager
    ) {}

    #[Route(path: '/recipes', name: 'recipe_create', defaults: ['_format' => 'json'], methods: [Request::METHOD_POST])]
    public function __invoke(Request $request): Response
    {
        $url = 'https://www.cookomix.com/recettes/creme-au-chocolat-thermomix/';

        $recipe = $this->recipeProvider->getRecipe($url);
        $violations = $this->validator->validate($recipe);
        if ($violations->count() > 0) {
            throw new BadRequestHttpException((string) $violations);
        }
        $this->entityManager->persist($recipe);
        $this->entityManager->flush();

        return new JsonResponse([], Response::HTTP_CREATED);
    }
}
