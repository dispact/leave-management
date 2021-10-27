<?php

namespace App\Http\Livewire;

use App\Models\Leave;
use Livewire\Component;
use App\Enums\StatusType;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Http;

class Approvals extends Component
{
    use WithPagination;

    public function approve($id) {
        $leave = Leave::where('id', $id)->first();
  
        $response = Http::withToken('Authorization', session('Authorization'))
            ->post('https://www.googleapis.com/calendar/v3/calendars/' . env('GOOGLE_CALENDAR_ID') . '/events', 
                $this->calendarEventDetails($leave)
            );

        if ($response->ok()) {
            $leave->update(['status' => StatusType::APPROVED]);
            $this->emit('flashSuccess', $leave->user->name . '\'s ' . $leave->leave_type->name . ' time has been approved');
            // add to calendar listener under leave approved event
        } else {
            $this->emit('flashError', 'Error approving event');
        }
    }

    public function deny($id) {
        $leave = Leave::where('id', $id)->first();
        $leave->update(['status' => StatusType::DENIED]);
        $this->emit('flashSuccess', $leave->user->name . '\'s ' . $leave->leave_type->name . ' time has been denied');
    }

    public function calendarEventDetails(Leave $leave) {
        $summary =  $leave->user->name . ' ' . $leave->leave_type->name . ' Time';
        $start = \Carbon\Carbon::parse($leave->start_date)->isoFormat('YYYY-MM-DD');
        $end = \Carbon\Carbon::parse($leave->end_date)->addDay()->isoFormat('YYYY-MM-DD');
        $timeZone = config('app.timezone');

        return [
            'summary' => $summary,
            'start' => [
                'date' => $start,
                'timeZone' => $timeZone
            ],
            'end' => [
                'date' => $end,
                'timeZone' => $timeZone
            ]
        ];
    }

    public function render()
    {
        return view('livewire.approvals', [
            'leaves' => Leave::where('status', StatusType::PENDING)
                ->with(['user', 'duration', 'leave_type'])
                ->orderBy('created_at', 'DESC')
                ->paginate(8)
        ]);
    }
}
