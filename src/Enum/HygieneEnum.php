<?php

namespace App\Enum;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

/**
 * @method static self SOPALIN()
 */
final class HygieneEnum extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const SOPALIN = 'sopalin';
}
