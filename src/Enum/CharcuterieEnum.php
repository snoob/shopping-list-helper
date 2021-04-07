<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self BACON()
 * @method static self BLANC_DE_DINDE()
 * @method static self JAMBON()
 * @method static self LARDON()
 */
final class CharcuterieEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BACON = 'bacon';

    public const BLANC_DE_DINDE = 'blanc de dinde';

    public const JAMBON = 'jambon';

    public const LARDON = 'lardon';
}
