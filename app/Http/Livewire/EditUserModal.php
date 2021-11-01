<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class EditUserModal extends Component
{
    public $show;

    public $allRoles;
    public $allSupervisors;

    public $user;
    public $currentSupervisor;
    public $currentRole;

    protected $listeners = [
        'toggleModal' => 'toggleModal'
    ];

    protected $rules = [
        'currentRole' => 'required',
        'currentSupervisor' => 'required'
    ];

    public function mount() {
        $this->show = false;
        $this->allRoles = Role::all();
        $this->allSupervisors = User::whereIn('id', DB::table('model_has_roles')
                ->where('model_type', 'App\Models\User')
                ->whereIn('role_id', [2,3])
                ->pluck('model_id')
                ->toArray()
            )
            ->get();
    }

    public function toggleModal(User $user) {
        $this->user = $user;
        $this->currentRole = $this->user->roles[0]->id;
        $this->currentSupervisor = $this->user->approver_id;
        $this->show = !$this->show;
    }

    public function submit() {
        $this->validate();

        $this->user->syncRoles([$this->currentRole]);
        $this->user->approver_id = $this->currentSupervisor;
        $this->user->save();

        $this->emitTo('user-table', 'refreshUserTable');

        $this->show = false;
    }

    public function render()
    {
        return view('livewire.edit-user-modal');
    }
}
