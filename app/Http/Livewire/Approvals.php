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
        $leave->update(['status' => StatusType::APPROVED]);
        $this->emit('flashSuccess', $leave->user->name . '\'s ' . $leave->leave_type->name . ' time has been approved');
        // $request = Http::post('https://www.googleapis.com/calendar/v3/' . env('GOOGLE_CALENDAR_ID') . '/events?key=' . env('GOOGLE_API_KEY'), [
        //     'summary' => 'Test',
        //     'start' => [
        //         'dateTime' => $leave->start_date,
        //     ],
        //     'end' => [
        //         'dateTime' => $leave->end_date
        //     ]
        // ]);
        // dd($request);
        // add to calendar listener under leave approved event
    }

    public function deny($id) {
        $leave = Leave::where('id', $id)->first();
        $leave->update(['status' => StatusType::DENIED]);
        $this->emit('flashSuccess', $leave->user->name . '\'s ' . $leave->leave_type->name . ' time has been denied');
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
