<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alert extends Component
{
    public $show = false;
    public $type = 'success';
    public $message = 'undefined';

    protected $listeners = [
        'flashSuccess' => 'success',
        'flashError' => 'error'
    ];

    public function show() {
        $this->show = !$this->show;
    }

    public function showAlert($payload) {
        $this->message = $payload['message'];
        $this->type = $payload['type'] ?? 'success';
        $this->dispatchBrowserEvent('alert-timeout');
    }

    public function success($message) {
        $this->type = 'success';
        $this->flashAlert($message);
    }

    public function error($message) {
        $this->type = 'error';
        $this->flashAlert($message);
    }

    public function flashAlert($message) { 
        $this->message = $message;
        $this->show();
        $this->dispatchBrowserEvent('alert-timeout');
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
