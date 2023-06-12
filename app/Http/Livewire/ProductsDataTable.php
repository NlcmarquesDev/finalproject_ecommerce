<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductsDataTable extends Component
{
    public $tablesearch;

    public $sortAsc = true;
    public $sortField;

    protected $queryString = ['tablesearch', 'sortAsc', 'sortField',];


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

        return view('livewire.products-data-table', [
            'products' =>  Product::withTrashed()->where(function ($query) {
                $query->where('name', 'like', '%' . $this->tablesearch . '%')
                    ->orWhere('description', 'like', '%' . $this->tablesearch . '%');
            })
                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
                ->paginate(20)
        ]);
    }
}
