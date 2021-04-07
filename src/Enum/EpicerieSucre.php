<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self CAFE()
 * @method static self CONFITURE()
 * @method static self NUTELLA()
 * @method static self DINAUSORUS()
 * @method static self GATEAU()
 * @method static self TABLETTE()
 * @method static self TARTELETTE()
 * @method static self SAINT_MICHEL()
 */
final class EpicerieSucre extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const CAFE = 'cafe';

    public const CONFITURE = 'confiture';

    public const DINOSAURUS = 'dinosaurus';

    public const GATEAU = 'gateau';

    public const NUTELLA = 'nutella';

    public const TABLETTE = 'tablette';

    public const TARTELETTE = 'tartelette';

    public const SAINT_MICHEL = 'saint michel';
}
