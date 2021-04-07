<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self BILLY()
 * @method static self CHEVRE()
 * @method static self COMPOTE()
 * @method static self COMTE()
 * @method static self DANETTE()
 * @method static self EMMENTAL()
 * @method static self FETA()
 * @method static self FICELLO()
 * @method static self FROMAGE()
 * @method static self LAIT()
 * @method static self MOZZA()
 * @method static self PARMESAN()
 * @method static self PETIT_SUISSE()
 * @method static self SAINT_ALBRAY()
 * @method static self SAINT_MORET()
 * @method static self YAOURT()
 */
final class LaitageEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BILLY = 'billy';

    public const CHEVRE = 'chevre';

    public const COMPOTE = 'compote';

    private const COMTE = 'comte';

    public const DANETTE = 'danette';

    public const EMMENTAL = 'emmental';

    public const FICELLO = 'ficello';

    public const FETA = 'feta';

    public const FROMAGE = 'fromage';

    public const LAIT = 'lait';

    public const MOZZA = 'mozza';

    public const PARMESAN = 'parmesan';

    public const PETITS_SUISSES = 'petit suisse';

    public const SAINT_ALBRAY = 'saint albray';

    public const SAINT_MORET = 'saint moret';

    public const YAOURT = 'yaourt';
}
