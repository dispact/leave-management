<?php

namespace App\Http\Livewire;

use App\Models\Leave;
use Livewire\Component;
use App\Enums\StatusType;

class LeaveManagement extends Component
{

    public function approve($id) {
        Leave::where('id', $id)->first()->update(['status' => StatusType::APPROVED]);
    }

    public function deny($id) {
        Leave::where('id', $id)->first()->update(['status' => StatusType::DENIED]);
    }

    public function render()
    {
        return view('livewire.leave-management', [
            'leaves' => Leave::where('status', StatusType::PENDING)
                ->with(['user', 'duration', 'leave_type'])
                ->get()
        ]);
    }
}
