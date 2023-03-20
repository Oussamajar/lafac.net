<?php

namespace App\Http\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    use WithPagination;
 
    protected $paginationTheme = 'bootstrap';
    public $newUser = [];
    public $isBtnAddCliked = false;

    

    public function render()
    {    
        return view('livewire.users.index',[
            'users' => ModelsUser::paginate(9),
        ])
            ->extends('layouts.master')
            ->section('contenu');
    }
    public function goToAddUser()
    {   
        $this->isBtnAddCliked = true;
    }


    public function addUser()
    {
        dump($this->newUser);
    }
}
