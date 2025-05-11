<?php

namespace App\Domain\Recipe\Provider;

use App\Domain\Recipe\Enum\RecipeSourceEnum;
use App\Domain\Recipe\Exception\RecipeNotFoundException;
use App\Entity\Recipe;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface as HttpClientExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final readonly class CookomixProvider implements ProviderInterface
{
    public function __construct(private HttpClientInterface $httpClient)
    {
    }

    public function supports(string $url): bool
    {
        return str_starts_with($url, 'https://www.cookomix.com/');
    }

    public function getRecipe(string $url): Recipe
    {
        try {
            $responseContent = $this->httpClient->request(Request::METHOD_GET, $url)->getContent();
        } catch (HttpClientExceptionInterface) {
            throw new RecipeNotFoundException($url);
        }

        $crawler = new Crawler($responseContent);
        $ingredientsNode = $crawler->filter('dl.ingredients');
        $ingredients = [];

        foreach ($ingredientsNode->filter('dt') as $quantityNode) {
            $ingredients[] = $quantityNode->nodeValue;
        }

        foreach ($ingredientsNode->filter('dd > a') as $index => $idNode) {
            $ingredients[$index] = $ingredients[$index] . ' ' . $this->getIngredientIdFromUrl($idNode->getAttribute('href'));
        }

        return new Recipe(
            \basename($url),
            $crawler->filter('.title')->text(),
            RecipeSourceEnum::COOKOMIX,
            $ingredients
        );
    }

    private function getIngredientIdFromUrl(string $url): string
    {
        return basename($url);
    }
}