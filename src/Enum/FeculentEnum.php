<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self COULIS()
 * @method static self PATE()
 * @method static self PESTO()
 * @method static self RIZ()
 * @method static self TOMATE_CONCASSEE()
 * @method static self SPAGHETTI()
 */
final class FeculentEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const COULIS = 'coulis';

    public const PATE = 'pate';

    public const PESTO = 'pesto';

    public const RIZ = 'riz';

    public const TOMATE_CONCASSEE = 'tomate concassee';

    public const SPAGHETTI = 'spaghetti';
}
