<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self LENTILLE()
 * @method static self PETIT_POID()
 * @method static self RAVIOLI()
 * @method static self THON()
 * @method static self TOMATES_PELEE()
 */
final class ConserveEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const PETIT_POID = 'petit poid';

    public const LENTILLE = 'lentille';

    public const RAVIOLI = 'ravioli';

    public const THON = 'thon';

    public const TOMATES_PELEE = 'tomate pelee';
}
