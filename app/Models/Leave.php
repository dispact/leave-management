<?php

namespace App\Models;

use Carbon\Carbon;
use App\Enums\StatusType;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Leave extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'status' => StatusType::class
    ];

    public static function boot() {
        parent::boot();

        static::created(function($leave) {
            Event::dispatch('leave.created', $leave);
        });

        static::updated(function($leave) {
            if($leave->status == StatusType::APPROVED)
                Event::dispatch('leave.approved', $leave);
                
            if($leave->status == StatusType::DENIED)
                Event::dispatch('leave.denied', $leave);
        });
    }

    public function getStartDate() {
        return Carbon::parse($this->start_date)->isoFormat('ddd MMM D, Y');
    }

    public function getEndDate() {
        return Carbon::parse($this->end_date)->isoFormat('ddd MMM D, Y');
    }

    public function getStartTime() {
        return Carbon::parse($this->start_date)->isoFormat('h:mm a');
    }

    public function getEndTime() {
        return Carbon::parse($this->end_date)->isoFormat('h:mm a');
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function approver() {
        return $this->belongsTo(User::class, 'approver_id', 'user_id');
    }

    public function leave_type() {
        return $this->belongsTo(LeaveType::class);
    }

    public function duration() {
        return $this->belongsTo(Duration::class);
    }

}
