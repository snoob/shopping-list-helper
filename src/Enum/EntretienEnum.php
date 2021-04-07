<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self ACIDE_CHLORHYDRIQUE()
 * @method static self CELLOPHANE()
 * @method static self EPONGE()
 * @method static self LESSIVE()
 * @method static self SAC()
 * @method static self VAISSELLE()
 * @method static self VINAIGRE_BLANC()
 */
final class EntretienEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const ACIDE_CHLORHYDRIQUE = 'acide chlorhydrique';

    public const CELLOPHANE = 'cellophane';

    public const EPONGE = 'eponge';

    public const LESSIVE = 'lessive';

    public const SAC = 'sac poubelle';

    public const VAISSELLE = 'vaisselle';

    public const VINAIGRE_BLANC = 'vinaigre blanc';
}
