<?php

namespace App\Controller;

use App\Handler\SortHandler;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SortController extends AbstractController
{
    private SortHandler $sortHandler;

    public function __construct(SortHandler $sortHandler)
    {
        $this->sortHandler = $sortHandler;
    }

    /**
     * @Route("/sort", name="sort", defaults={"_format"="json"})")
     */
    public function __invoke(Request $request): Response
    {
        $input = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR)['input'] ?? 'input';

        return new JsonResponse([
            'input' => $input,
            'output' => '' !== $input ? ($this->sortHandler)($input) : ''
        ]);
    }
}
