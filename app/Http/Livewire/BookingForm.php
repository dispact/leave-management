<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookingForm extends Component
{
    public $leaveTypes = ['Vacation', 'Sick', 'Personal'];
    public $durations = ['One full day', 'First half of day', 'Second half of day', 'Multiple days'];
    public $currentLeave = 'Vacation';
    public $currentDuration = '';

    public function render()
    {
        return view('livewire.booking-form');
    }
}
