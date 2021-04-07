<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self BRISEE()
 * @method static self FEUILLETEE()
 * @method static self FLAMMEKUECHE()
 * @method static self PIZZA()
 * @method static self SABLEE()
 * @method static self SARRAZIN()
 */
final class PateEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const BRISEE = 'brisee';

    public const FEUILLETEE = 'feuilletee';

    public const FLAMMEKUECHE = 'flammekueche';

    public const PIZZA = 'pizza';

    public const SABLEE = 'sablee';

    public const SARRAZIN = 'sarrazin';
}
