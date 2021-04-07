<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self LITIERE()
 */
final class AnimalerieEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const LITIERE = 'litiere';
}
