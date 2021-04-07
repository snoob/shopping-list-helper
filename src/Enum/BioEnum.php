<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;
/**
 * @method static self BOUILLON()
*/
final class BioEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BOUILLON = 'bouillon';
}
