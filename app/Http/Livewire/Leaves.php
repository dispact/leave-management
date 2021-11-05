<?php

namespace App\Http\Livewire;

use App\Models\Leave;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Leaves extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.leaves', [
            'leaves' => Leave::where('user_id', Auth::id())
                ->with(['leave_type', 'duration'])
                ->orderBy('start_date', 'DESC')
                ->paginate(8)
        ]);
    }
}
