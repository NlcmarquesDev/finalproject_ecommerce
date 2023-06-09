<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersDataTable extends Component
{

    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $is_active = 1;
    public $tablesearch;

    public $sortAsc = true;
    public $sortField;

    protected $queryString = ['tablesearch', 'is_active', 'sortAsc', 'sortField',];


    public function sortBy($field)
    {
        if ($this->sortField == $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }


    public function render()
    {

        return view('livewire.users-data-table', [

            "users" => User::withTrashed()->where(function ($query) {
                $query->where('name', 'like', '%' . $this->tablesearch . '%')
                    ->orWhere('email', 'like', '%' . $this->tablesearch . '%');
            })
                ->where('is_active', $this->is_active)
                ->with(['role', 'photo'])

                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
                ->paginate(20)
        ]);
    }

    public function updatedIsActive()
    {
        $this->resetPage();
    }
}
