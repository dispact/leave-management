<?php

namespace App\Models;

use App\Enums\DayType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Duration extends Model
{
    use HasFactory;

    public function checkDayType($dayType) {
        return $this->day == DayType::fromValue($dayType);
    }

    public function isSingleDayType() {
        return $this->day == DayType::SINGLE
            || $this->day == DayType::PARTIAL
            || $this->day == DayType::FIRST_HALF
            || $this->day == DayType::SECOND_HALF
        ;
    }

    public function isMultipleDayType() {
        return $this->day == DayType::MULTIPLE;
    }
}
