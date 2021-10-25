<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index() {
        return view('leaves.index', [
            'leaves' => Leave::where('user_id', auth()->id())
                ->with(['user', 'duration', 'leave_type'])
                ->get()
        ]);
    }
}
