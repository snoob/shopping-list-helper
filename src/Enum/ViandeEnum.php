<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self BLANQUETTE()
 * @method static self CABILLAUD()
 * @method static self CANARD()
 * @method static self CREVETTE()
 * @method static self ESCALOPE()
 * @method static self LAPIN()
 * @method static self SAUCISSE()
 * @method static self SAUMON()
 * @method static self STEAK()
 * @method static self VIANDE_HACHE()
 */
final class ViandeEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BLANQUETTE = 'blanquette';

    public const CABILLAUD = 'cabillaud';

    public const CANARD = 'canard';

    public const CREVETTE = 'crevette';

    public const ESCALOPE = 'escalope';

    public const LAPIN = 'lapin';

    public const SAUCISSE = 'saucisse';

    public const SAUMON = 'saumon';

    public const STEAK = 'steak';

    public const VIANDE_HACHE = 'viande hache';
}
