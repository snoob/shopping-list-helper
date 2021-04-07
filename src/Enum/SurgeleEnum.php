<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self POISSONS_PANES()
 * @method static self RATATOUILLE()
 */
final class SurgeleEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const POISSONS_PANES = 'poissons panes';

    public const RATATOUILLE = 'ratatouille';
}
