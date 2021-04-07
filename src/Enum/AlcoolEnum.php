<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self BIERE()
 * @method static self VIN()
 */
final class AlcoolEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BIERE = 'biere';

    public const VIN = 'vin';
}
