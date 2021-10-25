<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Pending()
 * @method static static Approved()
 * @method static static Denied()
 */
final class StatusType extends Enum
{
    const PENDING = 'Pending';
    const APPROVED = 'Approved';
    const DENIED = 'Denied';

    public function color() {
        return match($this->key) {
            'PENDING' => 'yellow',
            'APPROVED' => 'green',
            'DENIED' => 'red'
        };
    }
}
