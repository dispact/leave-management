<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class UserTable extends Component
{
    public $users;
    public $roles;

    public function mount() {
        $this->users = User::with(['roles', 'permissions'])->get();

        $this->supervisors = $this->users
            ->whereIn('id',
            DB::table('model_has_roles')
                ->where('model_type', 'App\Models\User')
                ->whereIn('role_id', [2,3])
                ->pluck('model_id')
                ->toArray()
        );
    }

    public function change() {
        return $this;
    }

    public function render()
    {
        return view('livewire.user-table', [
            'users' => $this->users
        ]);
    }
}
