<?php

namespace App\Handler;

use App\Model\InputLine;

final class InputDenormalizer
{
    /**
     * @param array<InputLine> $inputLines
     */
    public function __invoke(array $inputLines): string
    {
        $output = '<ul>';

        foreach ($inputLines as $inputLine) {
            $output .= '<li>' . $inputLine->originalText . '</li>';
        }

        return $output . '</ul>';
    }
}
