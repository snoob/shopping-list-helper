<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self BANANE()
 * @method static self CITRON()
 * @method static self FRUIT_DE_LA_PASSION()
 * @method static self KIWI()
 * @method static self MANGUE()
 * @method static self PASTEQUE()
 * @method static self POMME()
 * @method static self POIRE()
 */
final class FruitEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BANANE = 'banane';

    public const CITRON = 'citron';

    public const FRUIT_DE_LA_PASSION = 'fruit de la passion';

    public const KIWI = 'kiwi';

    public const MANGUE = 'mangue';

    public const PASTEQUE = 'pasteque';

    public const POMME = 'pomme';

    public const POIRE = 'poire';
}
