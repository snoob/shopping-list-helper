<?php

namespace App\Model;

use App\Entity\Category;
use function Symfony\Component\String\u;

final class InputLine
{
    public string $originalText;

    public int $linePosition;

    public function __construct(string $originalText)
    {
        $this->originalText = $originalText;
        $this->linePosition = 9999;
    }

    public function normalizeText(): string
    {
        return u($this->originalText)->ascii()->folded();
    }

    public static function sort(InputLine $inputLine1, InputLine $inputLine2): int
    {
        if ($inputLine1->linePosition === $inputLine2->linePosition) {
            return 0;
        }

        return $inputLine1->linePosition > $inputLine2->linePosition ? 1 : -1;
    }
}
