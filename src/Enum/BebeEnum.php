<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self BEBE()
 * @method static self BLEDICHEF()
 * @method static self BLEDIDEJ()
 * @method static self BLEDILAIT()
 * @method static self BLEDINA()
 * @method static self BLEDINER()
 */
final class BebeEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BEBE = 'bebe';

    public const BLEDICHEF = 'bledichef';

    public const BLEDIDEJ = 'bledidej';

    public const BLEDILAIT = 'bledilait';

    public const BLEDINA = 'bledina';

    public const BLEDINER = 'blediner';
}
