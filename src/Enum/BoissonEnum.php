<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self EAU()
 * @method static self HEPAR()
 * @method static self ICE_TEA()
 * @method static self JUS()
 * @method static self VOLVIC()
 */
final class BoissonEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const EAU = 'eau';

    public const HEPAR = 'hepar';

    public const ICE_TEA = 'ice tea';

    public const JUS = 'jus';

    public const VOLVIC = 'volvic';
}
