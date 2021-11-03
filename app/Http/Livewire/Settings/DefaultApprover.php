<?php

namespace App\Http\Livewire\Settings;

use App\Models\Setting;
use Livewire\Component;

class DefaultApprover extends Component
{
    public $approverId;

    public function mount() {
        $this->approverId = Setting::get('defaultApprover');
    }

    public function changeApprover($id) {
        $this->approverId = $id;
    }

    public function submit() {
        if ($this->approverId != Setting::get('defaultApprover'))
            Setting::set('defaultApprover', $this->approverId);
    }

    public function render()
    {
        return view('livewire.settings.default-approver', [
            'allSupervisors' => \App\Models\User::whereIn('id', \Illuminate\Support\Facades\DB::table('model_has_roles')
                ->where('model_type', 'App\Models\User')
                ->whereIn('role_id', [2,3])
                ->pluck('model_id')
                ->toArray()
            )
            ->get()
        ]);
    }
}
