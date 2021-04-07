<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self ALGERIENNE()
 * @method static self BARBECUE()
 * @method static self CORNICHON()
 * @method static self KETCHUP()
 * @method static self MAYONNAISE()
 * @method static self MOUTARDE()
 * @method static self OLIVE()
 * @method static self SEL()
 * @method static self TABASCO()
 * @method static self WORCESTER()
 */
final class CondimentEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const ALGERIENNE = 'algerienne';

    public const BARBECUE = 'barbecue';

    public const CORNICHON = 'cornichon';

    public const KETCHUP = 'ketchup';

    public const MAYONNAISE = 'mayonnaise';

    public const MOUTARDE = 'moutarde';

    public const OLIVE = 'olive';

    public const SEL = 'sel';

    public const TABASCO = 'tabasco';

    public const WORCESTER = 'worcester';
}
