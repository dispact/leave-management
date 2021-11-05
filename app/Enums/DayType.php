<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static SINGLE()
 * @method static static MULTIPLE()
 * @method static static PARTIAL()
 * @method static static FIRST_HALF()
 * @method static static SECOND_HALF()
 */
final class DayType extends Enum
{
    const SINGLE = 'Single';
    const MULTIPLE = 'Multiple';
    const PARTIAL = 'Partial';
    const FIRST_HALF = 'First Half';
    const SECOND_HALF = 'Second Half';
}
