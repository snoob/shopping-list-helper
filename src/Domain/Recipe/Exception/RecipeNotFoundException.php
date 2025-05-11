<?php

namespace App\Domain\Recipe\Exception;

use Psr\Log\LogLevel;
use Symfony\Component\HttpKernel\Attribute\WithHttpStatus;
use Symfony\Component\HttpKernel\Attribute\WithLogLevel;

#[WithHttpStatus(404)]
#[WithLogLevel(LogLevel::INFO)]
final class RecipeNotFoundException extends \RuntimeException
{
    public function __construct(string $url)
    {
        parent::__construct(sprintf('Recipe with url "%s" not found', $url));
    }
}