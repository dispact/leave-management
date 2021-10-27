<?php

namespace App\Http\Livewire\Settings;

use Livewire\Component;

class CalendarId extends Component
{
    public $calendarId;

    protected $rules = [
        'calendarId' => 'required'
    ];

    public function mount() {
        $this->calendarId = config('googleCalendarId');
    }

    public function submit() {
        // $this->validate();

        config(['googleCalendarId' => $this->calendarId]);
    }

    public function render()
    {
        return view('livewire.settings.calendar-id');
    }
}
