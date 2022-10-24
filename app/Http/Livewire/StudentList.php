<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class StudentList extends Component
{
    public $users;

    public function mount()
    {   
        $this->users = User::all();
    }

    public function render()
    {
        return view('dashboard');
    }
}
