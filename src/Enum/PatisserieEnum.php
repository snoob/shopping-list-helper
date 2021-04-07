<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self BEURRE()
 * @method static self CREME()
 * @method static self FARINE()
 * @method static self OEUF()
 * @method static self PLANTAFIN()
 */
final class PatisserieEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BEURRE = 'beurre';

    public const CREME = 'creme';

    public const FARINE = 'farine';

    public const OEUF = 'oeuf';

    public const PLANTAFIN = 'plantafin';
}
