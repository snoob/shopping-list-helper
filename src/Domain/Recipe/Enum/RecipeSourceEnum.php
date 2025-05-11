<?php

namespace App\Domain\Recipe\Enum;

enum RecipeSourceEnum: string
{
    case COOKOMIX = 'cookomix';

    case MANUAL = 'manual';
}
