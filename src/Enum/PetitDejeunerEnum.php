<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self BRIOCHE()
 * @method static self CEREALES()
 * @method static self CREPE()
 * @method static self PAIN()
 */
final class PetitDejeunerEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BRIOCHE = 'brioche';

    public const CEREALES = 'cereales';

    public const CREPE = 'crepe';

    public const MADELEINE = 'madeleine';

    public const PAIN = 'pain';
}
