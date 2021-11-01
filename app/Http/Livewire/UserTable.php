<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserTable extends Component
{
    protected $listeners = [
        'refreshUserTable' => '$refresh'
    ];

    public function mount() {
        $this->allSupervisors = User::whereIn('id', DB::table('model_has_roles')
                ->where('model_type', 'App\Models\User')
                ->whereIn('role_id', [2,3])
                ->pluck('model_id')
                ->toArray()
            )
            ->get();
        $this->allRoles = Role::all();
    }

    public function deleteUser($id) {
        User::findOrFail($id)->delete();
    }

    public function changeApprover($userId, $approverId) {
        $user = User::findOrFail($userId);
        $user->approver_id = $approverId;
        $user->save();
    }

    public function changeRole($userId, $roleId) {
        $user = User::findOrFail($userId);
        $user->syncRoles([$roleId]);
        $user->save();
    }

    public function render() {
        return view('livewire.user-table', [
            'users' => User::with(['roles', 'permissions'])->get()
        ]);
    }
}
