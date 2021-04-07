<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self CROUTON()
 * @method static self ORIGAN()
 * @method static self PATE_DE_COMPAGNE()
 * @method static self TAPAS()
 * @method static self TORTILLA()
 * @method static self WRAP()
 */
final class EpicerieSale extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const CROUTON = 'crouton';

    public const ORIGAN = 'origan';

    public const PATE_DE_CAMPAGNE = 'pate de campagne';

    public const TAPAS = 'tapas';

    public const TORTILLA = 'tortilla';

    public const WRAP = 'wrap';
}
