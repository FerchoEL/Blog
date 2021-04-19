<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{   
    use WithPagination;
    public $search;

    //Se indica los estilos a usar ya que estamos empleando adminLTE y este componente es de Livewire
    protected $paginationTheme = "bootstrap";
    public function updatingSearch(){
        $this->resetPage();
    } 
    public function render()
    {   
        $users=User::where('name','LIKE','%'.$this->search.'%')
                     ->orWhere('email','LIKE','%'.$this->search.'%')
                     ->paginate();
        return view('livewire.admin.users-index',compact('users'));
    }
}
