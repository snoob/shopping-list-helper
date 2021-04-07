<?php

namespace App\Handler;

use App\Model\InputLine;
use App\Repository\ProductRepository;
use Psr\Log\LoggerInterface;
use function Symfony\Component\String\u;

final class SortHandler
{
    private InputNormalizer $inputNormalizer;

    private InputDenormalizer $inputDenormalizer;

    public function __construct(InputNormalizer $inputNormalizer, InputDenormalizer $inputDenormalizer)
    {
        $this->inputNormalizer = $inputNormalizer;
        $this->inputDenormalizer = $inputDenormalizer;
    }

    public function __invoke(string $input): string
    {
        $normalizedInput = ($this->inputNormalizer)($input);
        usort($normalizedInput, [InputLine::class, 'sort']);

        return ($this->inputDenormalizer)($normalizedInput);
    }
}
