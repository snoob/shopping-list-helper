<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self COTON_TIGE()
 * @method static self DENTIFRICE()
 * @method static self MOUCHOIR()
 * @method static self SAVON()
 * @method static self SHAMPOING()
 */
final class SalleDeBainEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const COTON_TIGE = 'coton tige';

    public const DENTIFRICE = 'dentifrice';

    public const MOUCHOIR = 'mouchoir';

    public const SAVON = 'savon';

    public const SHAMPOING = 'shampoing';
}
