<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Log;

class CalendarId extends Component
{
    public $calendarId;

    protected $rules = [
        'calendarId' => 'required'
    ];

    protected $messages = [
        'calendarId.required' => 'Google Calendar ID is required'
    ];

    public function mount() {
        $this->calendarId = Setting::get('googleCalendarId');
    }

    public function submit() {
        $this->validate();

        try {
            Setting::set('googleCalendarId', $this->calendarId);
            $this->emit('flashSuccess', 'Google Calendar ID has been updated');
        } catch (\exception $e) {
            $this->emit('flashError', 'Error updating Google Calendar ID');
            Log::error('Error updating Google Calendar ID: ' . $e);
        }
    }

    public function render()
    {
        return view('livewire.settings.calendar-id');
    }
}
