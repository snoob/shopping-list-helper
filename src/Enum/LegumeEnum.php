<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self AIL()
 * @method static self AVOCAT()
 * @method static self AUBERGINE()
 * @method static self BUTTERNUT()
 * @method static self CAROTTE()
 * @method static self CELERI()
 * @method static self CHAMPIGNON()
 * @method static self CONCOMBRE()
 * @method static self COURGETTE()
 * @method static self ECHALOTTE()
 * @method static self EPINARD()
 * @method static self OIGNON()
 * @method static self PATATE_DOUCE()
 * @method static self POIVRON()
 * @method static self POIREAU()
 * @method static self POMME_DE_TERRE()
 * @method static self SALADE()
 * @method static self TOMATE()
 */
final class LegumeEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const AIL = 'ail';

    public const AVOCAT = 'avocat';

    public const AUBERGINE = 'aubergine';

    public const BUTTERNUT = 'butternut';

    public const CAROTTE = 'carotte';

    public const CELERI = 'celeri';

    public const CHAMPIGNON = 'champignon';

    public const CONCOMBRE = 'concombre';

    public const COURGETTE = 'courgette';

    public const ECHALOTTE = 'echalotte';

    public const EPINARD = 'epinard';

    public const OIGNON = 'oignon';

    public const PATATE_DOUCE = 'patate douce';

    public const POIVRON = 'poivron';

    public const POIREAU = 'poireau';

    public const POMME_DE_TERRE = 'pomme de terre';

    public const SALADE = 'salade';

    public const TOMATE = 'tomate';
}
